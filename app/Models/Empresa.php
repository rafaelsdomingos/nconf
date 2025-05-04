<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
     //proteção de campos
     protected  $guarded = ['id', 'timestamps'];

     public function gerente(): HasOne
    {
        return $this->hasOne(Gerente::class);
    }

    public function funcionarios(): HasMany
    {
        return $this->hasOne(Funcionario::class);
    }


}
