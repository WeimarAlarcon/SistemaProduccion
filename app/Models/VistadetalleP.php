<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VistadetalleP extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='v_detalle_pedido';
}
