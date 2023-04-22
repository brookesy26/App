<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'questionnaire_response_id', 'question_id', 'option_id',
    ];

    public function questionnaireResponse()
    {
        return $this->belongsTo(QuestionnaireResponse::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
