<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Questionnaire;
use App\Question;
use App\Option;
use Auth;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user_id = Auth::id();
        $questionnaire = Questionnaire::where('user_id', $user_id)->get();

        return view('home', ['questionnaire' => $questionnaire]);
    }
    public function create()
    {
        return view('questionnaires.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request->all());
        $title = $data['title'];
        $description = $data['description'];
        
  
        $questionnaire = Questionnaire::create([
            'title' => $title,
            'description' => $description,
            'status' => false,
            'user_id' => auth()->user()->id 
        ]);
        $questionnaire->save();

        foreach ($data as $key => $value) {
            if (strpos($key, 'question') === 0) {
                $question = Question::create([
                    'text' => $value,
                    'questionnaire_id' => $questionnaire->id
                ]);
            };
            if (strpos($key, 'option') === 0) {
                $option = Option::create([
                'text' => $value,
                'question_id' => $question->id
                ]);
            };
        };    
        return redirect()->route('home');
    }
    
    public function editQuestionnaire(Request $request, Questionnaire $questionnaire)
    {
        $data = $request->all();
        $title = $data['title'];
        $description = $data['description'];
        
        $questionnaire->title = $title;
        $questionnaire->description = $description;
        $questionnaire->save();

        foreach ($questionnaire->questions as $question) {
            $question->options()->delete();
            $question->delete();
        }
        foreach ($data as $key => $value) {
            if (strpos($key, 'question') === 0) {
                $question = Question::create([
                    'text' => $value,
                    'questionnaire_id' => $questionnaire->id
                ]);
            };
            if (strpos($key, 'option') === 0) {
                $option = Option::create([
                'text' => $value,
                'question_id' => $question->id
                ]);
            };
        };    
        return redirect()->route('home')->with('status', 'Questionnaire Edited successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $questionnaire = Questionnaire::findOrFail($id);
        $questionnaire->status = !$questionnaire->status;
        $questionnaire->save();
        return redirect()->route('home')->with('status', 'Questionnaire updated successfully!');
    }

    public function edit(Questionnaire $questionnaire)
    {
        $questions = $questionnaire->questions;
        foreach ($questions as $question) {
            $question->options = $question->options;
        }
        return view('questionnaires.edit', compact('questionnaire', 'questions'));
    }


    public function viewResponse(Questionnaire $questionnaire)
    {
        $responses = $questionnaire->questionnaireResponses;

        foreach($responses as $response){
        }

        return view('questionnaires.response', compact('questionnaire', 'response', 'responses'));
    }
    
    public function destroy(Questionnaire $questionnaire)
    {
        $questionnaire->delete();
        return redirect()->route('home')->with('status', 'Questionnaire deleted successfully!');
    }

};