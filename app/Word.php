<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function level()
    {
        return $this->belongsTo(WordLevel::class, 'level_id');
    }
}
