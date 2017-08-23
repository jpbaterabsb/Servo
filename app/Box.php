<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
