<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'direccion', 'user_id'];


    public function user() {
        return $this->belongsTo(User::class);
    }


    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}
