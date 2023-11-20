<?php

use Illuminate\Support\Facades\Route;
use Practicals\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies', function () {
    return view('veggies');
});
Route::get('/veggies/{NameOfVeggie}', function (string $NameOfVeggie) {
    return $NameOfVeggie;
});


Route::get('/veggies/{NameOfVeggie}', function (string $NameOfVeggie) {
    return $NameOfVeggie;
})->whereIn('NameOfVeggie', ['aaloo', 'gobhi', 'bhindi','baigan']);

Route::get('/songs', function () {
    return view('songs');
});

Route::get('/songs', function () {
    $song1 = new Song();
    $song1->setTitle("Stay With Me");
    $song1->setArtist("Chanyeol and Punch");

    $song2 = new Song();
    $song2->setTitle("Ice Cream");
    $song2->setArtist("BlankPink");

    $song3 = new Song();
    $song3->setTitle("Love you like a love song");
    $song3->setArtist("Salena Gomez");

    $song4 = new Song();
    $song4->setTitle("Monalisa");
    $song4->setArtist("mxmtoon");

    return view('songs',[ 'songs' => [ $song1, $song2, $song3, $song4 ] ] );
});

?>