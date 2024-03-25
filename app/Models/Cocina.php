<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\User;


class Cocina extends Model
{
    /**
     * Obtiene la categoría asociada a la cocina.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Obtiene el usuario asociado a la cocina.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
