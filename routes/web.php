<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Route::get('/notes', function () use ($notes) {
//     return $notes;
// });

Route::get('/hello', function (){
    return "Hello World!";
});

Route::get('/note/{index?}', [NoteController::class, 'show']);

Route::get('/', [NoteController::class, 'index']);

Route::get('/user/{id?}', function ($id = " "){
    return "User: " . $id;
});

Route::get('/welcome', function () {
    return view('welcome');
});
