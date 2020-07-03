<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordLevel extends Model
{
    public function words()
    {
        return $this->hasMany(Word::class, 'level_id');
    }
}
