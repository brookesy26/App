<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = [
        'question_id',
        'option_id'
    ];
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
