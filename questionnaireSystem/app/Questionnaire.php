<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status'
    ];
    
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'questionnaire_question');
    }

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_questionnaires');
    }
}
