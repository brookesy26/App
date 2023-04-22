<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireResponseController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
          dd($request->all());

        // return redirect()->route('questionnaires.show', ['questionnaire' => $questionnaire->id]);
    }
}
