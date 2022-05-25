<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoList2Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[todoList2Controller::class, 'index']);

Route::get('/welcome2', function () {
    return view('welcome2');
});


Route::post('/saveItemRoute', [todoList2Controller::class, 'saveItem'])->name('saveItem');// saveItem is name of walue

Route::post('/saveItemRoute4', [todoList2Controller::class, 'saveItem2'])->name('saveItem0');
                                    //classs                // Method of class  // name route in frontend.

Route::post('/markCompleteRoute/{id}', [todoList2Controller::class, 'markCompleteMethod'])->name('markCompleteRouteFront');

Route::get('/scan', function () {
     return view('scanpage');
 });


// Route::post('/saveItemRoute', function () {
//     //return view('welcome');
// })->name('saveItem');// saveItem is name of walue

// Route::post('/saveItemRoute', function () {
//     return view('welcome');
// })->name('saveItem');// saveItem is name of walue