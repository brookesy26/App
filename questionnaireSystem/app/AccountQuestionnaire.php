<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountQuestionnaire extends Model
{
    protected $fillable = ['account_id', 'questionnaire_id'];
}
