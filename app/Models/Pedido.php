<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'cliente_id'];


    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function productos() {
        return $this->belongsToMany(Producto::class, 'detalles_pedido', 'pedido_id', 'producto_id')->withPivot('cantidad')->withTimestamps();
    }
}
