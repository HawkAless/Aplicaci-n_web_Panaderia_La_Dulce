<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        //$productos = Producto::all();
        $productos = Producto::take(12)->get();
        
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }


    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');

        if ($request->hasFile('foto')) {
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        Producto::insert($datosProducto);


        return response()->json($datosProducto);
    }

    
}
