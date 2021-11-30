<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'detalle_pedido';
    protected $fillable = [
        'id',
        'descripcion',
        'talla',
        'color',
        'cantidad',
        'idpedido',
        'idproducto',
    ];

    public function pedidos()
    {
        return $this->BelongsTo(Pedido::class, 'idpedido');
    }
    public function productos()
    {
        return $this->BelongsTo(Producto::class, 'idproducto');
    }
    
}
