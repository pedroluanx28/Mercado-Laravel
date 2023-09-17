<?php

use App\Http\Controllers\{ProfileController, ProductsController, CategoriesController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});


//Rotas de Produtos

Route::get('/cadproduct', [ProductsController::class, 'formproducts'])->name('form.products');

Route::post('/storeProduct', [ProductsController::class, 'storeproducts'])->name('store.products');

Route::get('/home', [ProductsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products/{id}', [ProductsController::class, 'edit'])->name('edit.products');

//Rotas de Categorias

Route::get('/cadcategory', function () {
    return view('/Pages/Form-categories');
})->name('form.categories');

Route::post('/storeCategory', [CategoriesController::class, 'store'])->name('store.categories');

//Rotas de Auth

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
