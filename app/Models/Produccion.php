<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'produccion';
    protected $fillable = [
        'fecha_inicio',
        'idpedido',
        'idinsumo',
    ];

    public function insumos()
    {
        //return $this->hasMany('cliente', 'idcliente');
        return $this->BelongsTo(Insumo::class, 'idinsumo');
    }
    public function pedidos()
    {
        //return $this->hasMany('cliente', 'idcliente');
        return $this->BelongsTo(Pedido::class, 'idpedido');
    }
}
