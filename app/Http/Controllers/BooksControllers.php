<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index' , [
            'books' =>Book::all()  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create',[
            'authors' =>Author::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $authors = Author::find(request()->input('authors'));
        // dd($authors->toArray());
        $book = Book::create( request(['name','description', 'isbn']) );
        
        $book->authors()->attach($authors);

        return redirect('/books');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();

        return view('books.edit', compact('book' ,'authors')); 
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
        // dd($request->all());

        // existing books find 1st
        $book = Book::find($id);
        // find existings  authors 2nd
        $authors = $book->authors;

        // Deleting all authors using detach 3rd
        $book->authors()->detach($authors);

        // update book 4th
        $book->update(request(['name','description', 'isbn']));

        // New Authors create using attach  5th
        $authors = Author::find(request()->input('authors'));
        $book->authors()->attach(request('authors'));

        return redirect ('/books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
