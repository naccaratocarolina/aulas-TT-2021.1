<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest as BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Faz o display de todos os livros.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->get();
        return response()->json(['books' => $books]);
    }

    /**
     * Cria um novo livro.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(BookRequest $request)
    {
        $book = new Book;
        $book->createBook($request);
        return response()->json(['book' => $book]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json(['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->updateBook($request);
        return response()->json(['book' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        Book::destroy($id);
        return response()->json(['message' => 'Livro deletado.']);
    }
}
