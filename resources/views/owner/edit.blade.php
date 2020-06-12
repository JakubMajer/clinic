<h1>Edit Owner</h1>

<form method="POST" action="{{action('OwnerController@update', [
    $owner->id

])}}">

    @csrf
    <div>
        <label for="">First Name: </label>
        <input type="text" name="first_name" value="{{$owner->first_name}}">

    </div>

    <div>
        <label for="">Surname: </label>
    <input type="text" name="surname" value="{{$owner->surname}}">

    </div>


    </div>

    <button type="submit">Save owner!</button>


</form>