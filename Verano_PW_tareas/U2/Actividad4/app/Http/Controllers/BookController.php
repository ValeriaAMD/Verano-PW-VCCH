<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $librito = Book::all();
        return response()->json($librito,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newlibro = new Book([
            'name'=> $request->get('nombre'),
            'author'=> $request->get('autor'),
            'stock'=> $request->get('cantidad'),
            'price'=> $request->get('presio')
        ]);
        $newlibro->save();
        return response()->json($newlibro,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showlibro = Book::find($id);
        return response()->json($showlibro,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $uplibro = Book::find($id);
        $uplibro->name=$request->get('nombre');
        $uplibro->stock=$request->get('cantidad');
        $uplibro->price=$request->get('presio');
        $uplibro->save();
        return response()->json($uplibro,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroylibro = Book::find($id);
        $destroylibro->delete();
        return response()->json($destroylibro,200);
    }
}
