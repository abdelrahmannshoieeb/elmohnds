<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


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




Route::get('/' , [IndexController::class , 'index'])->name('home');
Route::view('/cart' , 'elmohnds.cart')->name('cart');
Route::view('/wishlist' , 'elmohnds.wishlist')->name('wishlist');
Route::view('/theproducts' , 'elmohnds.products')->name('theproducts');
Route::get('/product/{id}' , [ProductController::class , 'index'])->name('product');
Route::view('/checkout' , 'elmohnds.checkout')->name('checkout');
Route::view('/contact' , 'elmohnds.contact')->name('contact');







//dashboard
Route::view('/categories' , 'admin.categories.categories')->name('categories');
Route::view('/brands' , 'admin.brands.brands')->name('brands');

Route::view('/addProduct', 'admin.product.addProduct')->name('addProduct');
Route::view('/products', 'admin.product.products')->name('products');
Route::view('/editProduct/{id}', 'admin.product.editproduct')->name('editProduct');
Route::view('/banners', 'admin.banners.banners')->name('banners');
Route::view('/settings', 'admin.settings.settings')->name('settings');