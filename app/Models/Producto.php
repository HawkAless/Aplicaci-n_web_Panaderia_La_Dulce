<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_producto', 'descripcion', 'precio', 'categoria_id'];


    public function inventario() {
        return $this->hasOne(Inventario::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function pedidos() {
        return $this->belongsToMany(Pedido::class, 'detalles_pedido', 'producto_id', 'pedido_id')->withPivot('cantidad')->withTimestamps();
    }

}
