<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gerente extends Model
{
     //proteção de campos
     protected  $guarded = ['id', 'timestamps'];

     //Relacionamentos
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
}
