<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'questionnaire_id',
        'created_at'
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
