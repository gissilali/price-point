<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'platform_id'];

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'question_id', 'id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'option_id', 'id');
    }
}
