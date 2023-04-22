<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Questionnaire;
use App\Question;
use App\Option;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('questionnaires.create');
    }
    public function show(Questionnaire $questionnaire)
    {
    return view('questionnaires.show', compact('questionnaire'));
    }

    
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request->all());
        // get the questionnaire title and description
        $title = $data['title'];
        $description = $data['description'];
        
        // create the questionnaire
        $questionnaire = Questionnaire::create([
            'title' => $title,
            'description' => $description,
            'user_id' => auth()->user()->id // set the user_id to the currently authenticated user's id
        ]);
        $questionnaire->save();
        
        // loop through the question data and create questions and options
        //data = array
        //key = name of input i.e., text
        // value is the user input
        foreach ($data as $key => $value) {
            if (strpos($key, 'question') === 0) {
                // this is a question, create it
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
        // redirect to the questionnaire show page
        return redirect()->route('questionnaires.show', ['questionnaire' => $questionnaire->id]);
    }
};