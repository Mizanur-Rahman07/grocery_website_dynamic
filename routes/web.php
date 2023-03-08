<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductLabelController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductOfferController;

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
// });\
Route::get('/', [FrontEndController::class, 'index'])->name('/');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontEndController::class, 'blog_details'])->name('blog.details');
Route::get('/compare', [FrontEndController::class, 'compare'])->name('compare');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/faq', [FrontEndController::class, 'faq'])->name('faq');
Route::get('/product-details', [FrontEndController::class, 'product_details'])->name('product.details');
Route::get('/shopping cart', [FrontEndController::class, 'shoppingCart'])->name('shoppingCart');
Route::get('/wishList', [FrontEndController::class, 'wishList'])->name('wishList');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new.product');
    Route::get('/product-status/{id}', [ProductController::class, 'productStatus'])->name('product.status');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::post('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete.product');

    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new-category');
    Route::get('/cat-status/{id}', [CategoryController::class, 'catStatus'])->name('cat.status');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    Route::get('/add-product-type', [ProductTypeController::class, 'addProductType'])->name('add.productType');
    Route::post('/new-product-type', [ProductTypeController::class, 'saveProductType'])->name('new.productType');
    Route::get('/type-status/{id}', [ProductTypeController::class, 'typeStatus'])->name('type.status');
    Route::get('/manage-product-type', [ProductTypeController::class, 'manageProductType'])->name('manage.productType');
    Route::get('/edit-product-type/{id}', [ProductTypeController::class, 'editProductType'])->name('edit.productType');
    Route::post('/update-product-type', [ProductTypeController::class, 'updateProductType'])->name('update.productType');
    Route::post('/delete-product-type', [ProductTypeController::class, 'deleteProductType'])->name('delete.productType');

    Route::get('/add-product-offer', [ProductOfferController::class, 'addProductOffer'])->name('add.productOffer');
    Route::post('/new-product-offer', [ProductOfferController::class, 'saveProductOffer'])->name('new.product.offer');
    Route::get('/product-offer-status/{id}', [ProductOfferController::class, 'productOfferStatus'])->name('product.offer.status');
    Route::get('/manage-product-offer', [ProductOfferController::class, 'manageProductOffer'])->name('manage.product.offer');
    Route::get('/edit-product-offer/{id}', [ProductOfferController::class, 'editProductOffer'])->name('edit.product.offer');
    Route::post('/update-product-offer', [ProductOfferController::class, 'updateProductOffer'])->name('update.product.offer');
    Route::post('/delete-product-offer', [ProductOfferController::class, 'deleteProductOffer'])->name('delete.product.offer');

    Route::get('/add-product-label', [ProductLabelController::class, 'addProductLabel'])->name('add.product.label');
    Route::get('/new-product-label', [ProductLabelController::class, 'saveProductLabel'])->name('new.product.label');
});