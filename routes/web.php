<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorporationController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ConstituencyController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resources([
      'corporation'                     => CorporationController::class,
      'zone'                            => ZoneController::class,
      'constituency'                    => ConstituencyController::class,
      'ward'                            => WardController::class,
      'user'                            => UserController::class,
    ]);
});

Route::get('/clear-cache', function () {
  \Artisan::call('cache:clear');
  \Artisan::call('route:clear');
  \Artisan::call('config:clear');
  \Artisan::call('view:clear');
  echo 'All caches cleared successfully!';
});
