<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use Auth;

class pullDataController extends Controller
{    
    public function questionnaireLoad(){
        $questionnaire = Questionnaire::where('status', true)->get();
        return view('welcome', ['questionnaire' => $questionnaire]);
    }

    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaires.show', compact('questionnaire'));
    }
}
