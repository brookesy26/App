<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'text'
    ];
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function questionOptions()
    {
        return $this->hasMany(QuestionOption::class);
    }
    
    public function answerOptions()
    {
        return $this->hasMany(AnswerOption::class);
    }
}
