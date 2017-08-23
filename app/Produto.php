<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }


    public function situacao()
    {
        return $this->belongsTo(Situacao::class);
    }

    public function box()
    {
        return $this->hasOne(Box::class);
    }

}
