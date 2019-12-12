<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolim extends Model
{
    public function xodimlar()
    {
        return $this->hasMany(User::class);
    }
}
