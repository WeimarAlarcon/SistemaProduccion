<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'venta';
    protected $fillable = [
        'id',
        'codigo',
        'fecha',
        'idcliente',
    ];

    public function clientes()
    {
        return $this->BelongsTo(Cliente::class, 'idcliente');
    }
    public function detalleventas()
    {
        return $this->hasMany(DetalleVenta::class, 'id');
    }
}
