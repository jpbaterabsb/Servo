<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function produto()
    {
        return $this->hasMany(Produto::class);
    }
}
