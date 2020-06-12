<?php

use Illuminate\Support\Facades\Route;
use App\Pets;
use App\Owners;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api', function () {
    $json = file_get_contents(storage_path('data/clients.json'));
	$objs = json_decode($json,true);
    

    foreach ($objs as $item) {
        $owner = new Owners;
        $owner->first_name = $item['first_name'];
        $owner->surname = $item['surname'];
        $owner->save();

        foreach ($item['pets'] as $attribute) {
            $pet = new Pets;
            $pet->name = $attribute['name'];
            $pet->breed = $attribute['breed'];
            $pet->weight = $attribute['weight'];
            $pet->age = $attribute['age'];
            $pet->image = $attribute['photo'];
            $pet->owner_id = $owner->id;
            $pet->save();
        }
    }


    // return gettype($objs[0]);
    var_dump($objs);

});
Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/owner', 'OwnerController@index')->name('owners.index');
Route::get('/owner/create', 'OwnerController@create');
Route::get('/owner/{owner_id}/edit', 'OwnerController@edit')->name('bob');
Route::post('/owner', 'OwnerController@store');
Route::post('/owner/{owner_id}', 'OwnerController@update');



Route::get('/pet', 'PetController@index')->name('pets.index');
Route::get('/pet/create', 'PetController@create');

Route::get('/search', 'SearchController@index')->name('search.index');


