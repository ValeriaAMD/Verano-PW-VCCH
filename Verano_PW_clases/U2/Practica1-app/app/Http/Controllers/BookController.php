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
        $letritas = Book::all();
        return response()->json($letritas,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newrevista = new Book([
            'name'=> $request->get('nombre'),
            'stock'=> $request->get('cantidad'),
            'price'=> $request->get('presio')
        ]);
        $newrevista->save();
        return response()->json($newrevista,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showrevista = Book::find($id);
        return response()->json($showrevista,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $uprevista = Book::find($id);
        $uprevista->name=$request->get('nombre');
        $uprevista->stock=$request->get('cantidad');
        $uprevista->price=$request->get('presio');
        $uprevista->save();
        return response()->json($uprevista,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destryrevista = Book::find($id);
        $destryrevista->delete();
        return response()->json($destryrevista,200);
    }
}
