<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $fillable = [
        "producto_id",  
        "cantidad",        
        ];


    public function medida()
    {
        return $this->hasOne(
            UnidadMedida::class,
            'id',
            'medida_id'
        );
    }

    public function etnia()
    {
        return $this->hasOne(
            Etnia::class,
            'id',
            'etnia_id'
        );
    }

    public function cooperativa()
    {
        return $this->hasOne(
            Cooperativa::class,
            'id',
            'cooperativa_id'
        );
    }
}




