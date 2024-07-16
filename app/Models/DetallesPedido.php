<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model
{
    use HasFactory;

    protected $table = 'detalles_pedido';
    protected $primaryKey = 'id';
    protected $fillable = ['pedido_id', 'producto_id', 'cantidad'];

}
