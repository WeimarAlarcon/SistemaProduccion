<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'detalle_venta';
    protected $fillable = [
        'id',
        'idpedido',
        'precio_total',
        'idventa',
        'idproducto',
    ];

    public function ventas()
    {
        return $this->BelongsTo(Venta::class, 'idventa');
    }
    public function productos()
    {
        return $this->BelongsTo(Producto::class, 'idproducto');
    }
    public function pedidos()
    {
        return $this->BelongsTo(Pedido::class, 'idpedido');
    }
}
