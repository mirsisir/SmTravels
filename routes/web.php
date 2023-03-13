<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ContactsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebsiteController::class, 'home'])->name('home');

Route::get('/contact_us', [WebsiteController::class, 'contact_us'])->name('contact_us');
Route::get('/package/{id}', [WebsiteController::class, 'package'])->name('package');

Route::get('/package_details/{id}', [WebsiteController::class, 'package_details'])->name('package_details');





Route::group([
    'prefix' => 'contacts',
], function () {
    Route::get('/', [ContactsController::class, 'index'])
         ->name('contacts.contact.index');
    Route::get('/create', [ContactsController::class, 'create'])
         ->name('contacts.contact.create');
    Route::get('/show/{contact}',[ContactsController::class, 'show'])
         ->name('contacts.contact.show')->where('id', '[0-9]+');
    Route::get('/{contact}/edit',[ContactsController::class, 'edit'])
         ->name('contacts.contact.edit')->where('id', '[0-9]+');
    Route::post('/', [ContactsController::class, 'store'])
         ->name('contacts.contact.store');
    Route::put('contact/{contact}', [ContactsController::class, 'update'])
         ->name('contacts.contact.update')->where('id', '[0-9]+');
    Route::delete('/contact/{contact}',[ContactsController::class, 'index'])
         ->name('contacts.contact.destroy')->where('id', '[0-9]+');
});


Route::middleware(['auth', 'auth.session'])->group(function () {
   

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

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
