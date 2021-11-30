<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribuidora extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey='id';
    protected $table = 'distribuidora';
    protected $fillable = [
        'id',
        'nit',
        'nombre',
        'pais',
        'departamento',
        'ciudad',
        'telefono',
        'direccion',
    ];

    public function insumos()
    {
        //return $this->hasMany('cliente', 'idpersona');
        return $this->hasMany(Insumo::class, 'id');
    }
}
