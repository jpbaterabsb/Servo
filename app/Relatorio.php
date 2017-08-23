<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
