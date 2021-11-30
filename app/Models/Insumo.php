<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'insumo';
    protected $fillable = [
        'codigo',
        'nombre',
        'iddistribuidora',
    ];

    public function distribuidoras()
    {
        return $this->BelongsTo(Distribuidora::class, 'iddistribuidora');
    }

    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id');
    }
}
