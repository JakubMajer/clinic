@extends('layouts.layout', [
    'title' => 'this pet'
])

@section('content')

    <h1>Name: {{$pet->name}}</h1>
    <h2>Breed: {{$pet->breed}}</h2>
    <h2> Age: {{$pet->age}}</h2>
    <h2> Weight: {{$pet->weight}}</h2>
<img src="/images/{{$pet->image}}">
<p> Owner is {{$pet->owner->first_name}} {{$pet->owner->surname}}.</p>
    

  <a href='/pet/edit'> <button> Edit </button> </a>

@endsection