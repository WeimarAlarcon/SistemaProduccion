<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'persona';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'sexo',
    ];
    public function clientes()
    {
        //return $this->hasMany('cliente', 'idpersona');
        return $this->hasMany(Cliente::class, 'id');
    }
}