<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'productos'; 

     //Definiendo los campos de la tabla
     protected $fillable = [
        "producto",        
        "costo",
        "categoria_id",
        "precio",
        
        
        
        ];

    public function categoria()
    {
        return $this->hasOne(
            Categoria::class,
            'id',
            'categoria_id'
        );
    }

        
}
