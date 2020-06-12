<h1>Create new User</h1>

<form method="POST" action="/owner">

    @csrf
    <div>
        <label for="">First Name: </label>
        <input type="text" name="name">

    </div>

    <div>
        <label for="">Surname: </label>
        <input type="text" name="breed">

    </div>


    <button type="submit">Save new owner!</button>


</form>