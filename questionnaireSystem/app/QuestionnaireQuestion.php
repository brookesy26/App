<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireQuestion extends Model
{
    protected $table = 'questionnaire_question';
    
    protected $fillable = [
        'questionnaire_id',
        'question_id'
    ];
    
    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
