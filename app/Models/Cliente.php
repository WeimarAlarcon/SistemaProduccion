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
    ];

    public function personas()
    {
        //return $this->BelongsTo('persona', 'idpersona');
        return $this->BelongsTo(Persona::class, 'idpersona');
    }
}
