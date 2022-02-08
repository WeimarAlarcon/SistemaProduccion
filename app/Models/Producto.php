<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'updated_date';
    public $timestamps = false;
    //const UPDATED_AT = null;

    use HasFactory;
    //protected $primaryKey = 'id';
    //public $incrementing = false;
    protected $table = 'producto';
    protected $fillable = [
        'id',
        'nombre',
        'precio_unitario',
    ];
    
    public function detallepedidos()
    {
        return $this->hasMany(DetallePedido::class, 'id');
    }
    
}
