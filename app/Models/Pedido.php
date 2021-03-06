<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'pedido';
    protected $fillable = [
        'id',
        'lugar_entrega',
        'fecha_entrega',
        'cantidad_total',
        'idcliente',
    ];

    public function clientes()
    {
        //return $this->hasMany('cliente', 'idcliente');
        return $this->BelongsTo(Cliente::class, 'idcliente');
    }
    public function producciones()
    {
        return $this->hasMany(Produccion::class, 'id');
    }
    public function detallepedidos()
    {
        return $this->hasMany(DetallePedido::class, 'id');
    }

}
