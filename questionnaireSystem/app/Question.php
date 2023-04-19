<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text'
    ];
    
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    
    public function questionnaireQuestions()
    {
        return $this->hasMany(QuestionnaireQuestion::class);
    }
}
