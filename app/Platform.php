<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = ['name', 'base_cost'];

    public function questions()
    {
        return  $this->hasMany(Question::class, 'platform_id', 'id');
    }

    public function questionCount()
    {
        return $this->questions()->selectRaw('platform_id, count(*) as count')->groupBy('platform_id');
    }
}
