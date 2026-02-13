<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

  Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
