<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireResponse extends Model
{
    protected $fillable = [
        'questionnaire_id',
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
