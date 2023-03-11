<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PackagesController;

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

Route::get('/home', [WebsiteController::class, 'home'])->name('home');

Route::get('/package/{id}', [WebsiteController::class, 'package'])->name('package');

Route::get('/package_details/{id}', [WebsiteController::class, 'package_details'])->name('package_details');



Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('/', [CategoriesController::class, 'index'])
         ->name('categories.category.index');
    Route::get('/create', [CategoriesController::class, 'create'])
         ->name('categories.category.create');
    Route::get('/show/{category}',[CategoriesController::class, 'show'])
         ->name('categories.category.show')->where('id', '[0-9]+');
    Route::get('/{category}/edit',[CategoriesController::class, 'edit'])
         ->name('categories.category.edit')->where('id', '[0-9]+');
    Route::post('/', [CategoriesController::class, 'store'])
         ->name('categories.category.store');
    Route::put('category/{category}', [CategoriesController::class, 'update'])
         ->name('categories.category.update')->where('id', '[0-9]+');
    Route::delete('/category/{category}',[CategoriesController::class, 'index'])
         ->name('categories.category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'packages',
], function () {
    Route::get('/', [PackagesController::class, 'index'])
         ->name('packages.package.index');
    Route::get('/create', [PackagesController::class, 'create'])
         ->name('packages.package.create');
    Route::get('/show/{package}',[PackagesController::class, 'show'])
         ->name('packages.package.show')->where('id', '[0-9]+');
    Route::get('/{package}/edit',[PackagesController::class, 'edit'])
         ->name('packages.package.edit')->where('id', '[0-9]+');
    Route::post('/', [PackagesController::class, 'store'])
         ->name('packages.package.store');
    Route::put('package/{package}', [PackagesController::class, 'update'])
         ->name('packages.package.update')->where('id', '[0-9]+');
    Route::delete('/package/{package}',[PackagesController::class, 'index'])
         ->name('packages.package.destroy')->where('id', '[0-9]+');
});
