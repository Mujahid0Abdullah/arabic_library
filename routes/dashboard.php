<?php
// use App\Http\Controllers\Dashboard\CategoriesController;
// use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Dashboard\ProfileController;


// Route::resource('/dashboard/index',DashboardController::class)->middleware('auth');
// Route::get('/dashboard/profile',[ProfileController::class,'edit'])
// ->middleware('auth');

// Route::patch('/dashboard/profile',[ProfileController::class,'update'])
// ->name('dashboard.profile.update');
// put {id} // patch id - null // update
// for update data
 // put{id} - patch
//middleware auth -> /dashboard/index


// Route::resource('/dashboard/categories',CategoriesController::class)
// ->middleware('auth');


//////////////////// Route Group /////////////
Route::group([
'middleware' => ['auth'],
'namespace' => 'App\Http\Controllers\Dashboard',
'prefix' => 'dashboard'

],function(){

    Route::resource('/index',DashboardController::class);
    Route::resource('/categories',CategoriesController::class);
    Route::get('/profile',[ProfileController::class,'edit'])->name('dashboard.profile.edit');
    Route::patch('/profile',[ProfileController::class,'update'])
    ->name('dashboard.profile.update');


});
