<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey='id';
    protected $table = 'cliente';
    protected $fillable = [
        'id',
        'celular',
        'idpersona',
        'nombre',
        'apellido',
    ];

    public function pedidos()
    {
        //return $this->hasMany('cliente', 'idpersona');
        return $this->hasMany(Pedido::class, 'id');
    }
    public function personas()
    {
        //return $this->BelongsTo('persona', 'idpersona');
        return $this->BelongsTo(Persona::class, 'idpersona');
    }
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id');
    }
}
