<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;
use App\Option;
use App\QuestionnaireResponse;
use App\Answer;

class QuestionnaireResponseController extends Controller
{
    public function submitResponse(Request $request, Questionnaire $questionnaire)
    {
        $data = $request->all();
        // dd($data);
        $response = QuestionnaireResponse::create([
          'questionnaire_id' => $questionnaire->id
      ]);
      $response->save();

        foreach ($questionnaire->questions as $question) {
            $answer = Answer::create([
              'question_id' => $question->id,
              'option_id' => $data['option_'.$question->id],
              'questionnaire_response_id' => $response->id
            ]);
            $answer->save();
        }
        
        return redirect()->route('welcome')->with('status', 'Questionnaire Submitted successfully!');
    }
    
}