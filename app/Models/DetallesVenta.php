<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesVenta extends Model
{
    use HasFactory;
    protected $table = 'detalles_ventas';
 
    protected $fillable = [
        "venta_id",        
        "producto_id",
        "cantidad",        
        ];


    public function producto()
    {
        return $this->hasOne(
            Producto::class,
            'id',
            'producto_id'
        );
    }

}
