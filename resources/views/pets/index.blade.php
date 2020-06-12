@extends('layouts.layout',[
    'title'=>'PETS!!!'
])
@section('content')
    
<h1>Pet</h1>

@foreach($pets as $pet)

<h2>Pet: {{$pet->name}}<h2>
<h2>Owner: {{$pet->owner->first_name}} {{$pet->owner->surname}}</h2>
<a href="{{ route('pet.show', [$pet->id]) }} "> Read more...</a>

@endforeach 

@endsection