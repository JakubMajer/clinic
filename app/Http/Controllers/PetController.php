<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets;

class PetController extends Controller
{
    public function index()
    {
        return view('pets.index');
    }

    public function show()
    {
        # code...
    }

    public function create()
    {
        return view('pet.create');
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
