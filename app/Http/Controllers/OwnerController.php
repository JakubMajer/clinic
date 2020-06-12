<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owners;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owner.index');
    }
    public function show($owner_id){

        $owner = Owners::findOrFail($owner_id);

        $owner = Owners::where('owner_id', $owner_id)->get();

        return view('owner.show', compact('owner'));
    }

    public function create()
    {
        return view('owner.create');
    }

    public function store(Request $request)
    {
        $owner = new Owners;
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');


        $owner->save();

        return redirect('/owner/' . $owner->id);
    }

    public function edit($owner_id)
    {
        $owner = Owners::findOrFail($owner_id);

        return view('owner.edit', compact('owner'));
    }

    public function update($owner_id, Request $request)
    {
        $owner = Owners::findOrFail($owner_id);

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');


        $owner->save();


        return redirect(route('bob', [
            $owner->id
        ]));
    }
}