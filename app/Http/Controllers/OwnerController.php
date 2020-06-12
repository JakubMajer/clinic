<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owners;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owners.index');
    }
    public function show($owner_id){

        $owner = Owner::findOrFail($owner_id);

        $books = Book::where('publisher_id', $publisher_id)->get();

        return view('publishers.show', compact('publisher', 'books'));
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store()
    {
        # code...
    }

    public function edit()
    {
        # code...
    }
    public function update()
    {
        # code...
    }
}