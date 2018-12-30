<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function suit()
    {
        return $this->belongsTo('App\Models\Suit');
    }
}