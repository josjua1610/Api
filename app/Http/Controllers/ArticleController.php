<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticleController extends Controller
{
    public function index()
    {
        return Articulo::all();
    }

    public function store(Request $request)  #crear productos
    {
         $article = Articulo::create([
            'descripcion' => $request->descripcion,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return response()->json($article, 201);
    }

    public function update(Request $request, string $id) #Actualizar los articulos
    {
        $article = Articulo::findOrFail($id);
        $article->update([
            'descripcion' => $request->descripcion,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return response()->json($article);
    }

    public function destroy(string $id) #Eliminar articulos
    {
        $deleted = Articulo::destroy($id);
        return response()->json(['deleted' => $deleted]);
    }
}
