@extends('layouts/layout', [
    'title' => 'Create Pet'
])
@section('content')

<h1>Create new Dog</h1>

<form method="POST" action="/pet">

    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name">

    </div>

    <div>
        <label for="">Breed</label>
        <input type="text" name="breed">

    </div>

    <div>
        <label for="">Image</label>
        <input type="text" name="image">

    </div>

    <div>
        <label for="">Weight</label>
        <input type="text" name="weight">

    </div>

    <div>
        <label for="">Age</label>
        <input type="text" name="age">

    </div>
    <div>
        <label for="">Owner ID</label>
        <input type="text" name="owner_id">

    </div>

    <button type="submit">Save new dog!</button>


</form>
@endsection