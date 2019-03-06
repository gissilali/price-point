<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['option', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
