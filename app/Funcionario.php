<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public function produto()
    {
        return $this->hasMany(Produto::class);
    }

    public function relatorio()
    {
        return $this->hasMany(Relatorio::class);
    }
}
