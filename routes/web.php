<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{$id}', [EventController::class, 'show']);

Route::post('/events', [EventController::class, 'store']);

Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/contact', function(){
    return view("contact");
});

Route::get('/products', function(){

    $name = "Charles Dantas";
    $myList = [1,2,3,4,5,6,7];

    $search = request('search');

    return view("produtos",
    [
    "name" => $name,
    "myList" => $myList,
    "search" => $search,

]);

});

Route::get('/products/{id}', function ($id) { //To use option parameters id? and in the functio: $id = 1

    return view('product', ['id' => $id]);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
