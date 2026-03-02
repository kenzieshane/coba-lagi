<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findorFail($id);
        return view('book', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $user = auth()->user();

        $ownedProducts = trim($user->owned_product);
        $productsArray = $ownedProducts ? explode(',', $ownedProducts) : [];

        if (!in_array($id, $productsArray)) {
            $productsArray[] = $id;
            $user->owned_product = implode(',', $productsArray);
            $user->save();
        }

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }

    public function myBooks()
    {
        $user = auth()->user();
        $ownedProducts = trim($user->owned_product);
        $productsArray = $ownedProducts ? explode(',', $ownedProducts) : [];

        $books = Book::whereIn('id', $productsArray)->get();

        return view('my-books', ['books' => $books]);
    }

    public function removeFromCart(Request $request, $id)
    {
        $user = auth()->user();
        $ownedProducts = trim($user->owned_product);
        $productsArray = $ownedProducts ? explode(',', $ownedProducts) : [];

        if (($key = array_search($id, $productsArray)) !== false) {
            unset($productsArray[$key]);
            $user->owned_product = implode(',', $productsArray);
            $user->save();
        }

        return redirect()->back()->with('success', 'Buku berhasil dihapus dari daftar!');
    }
}
