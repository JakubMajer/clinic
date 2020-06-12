<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function show($pet_id)
    { 
        $pet = Pet::findOrFail($pet_id);
        return view('pets.show', compact('pet'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
       $pet = new Pet;
       $pet->name = $request->input('name'); 
       $pet->breed = $request->input('breed');
       $pet->image = $request->input('image'); 
       $pet->weight = $request->input('weight');
       $pet->age = $request->input('age');   
       $pet->owner_id = $request->input('owner_id');

       $pet->save();

       return redirect('/pet/'. $pet->id);
    }

    public function edit($pet_id)
    {
        $pet = Pet::findOrFail($pet_id);
        return view('pets.show', compact('pet'));
    }
    public function update($pet_id, Request $request)
    {
        $pet = Pet::findOrFail($pet_id);

        $pet->name = $request->input('name'); 
       $pet->breed = $request->input('breed');
       $pet->image = $request->input('image'); 
       $pet->weight = $request->input('weight');
       $pet->age = $request->input('age');   
       $pet->owner_id = $request->input('owner_id');

       $pet->save();

       return redirect('/pet/'. $pet->id);
    }
}
