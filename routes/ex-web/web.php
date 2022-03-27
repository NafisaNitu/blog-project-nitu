<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Front\PageController;

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

//Front
Route::get('/', [PageController::class, 'home'])->name('home');



// Login,register
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Category Crud
Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
Route::get('/change-status/{id}', [CategoryController::class, 'changeStatus'])->name('change-status');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');
Route::post('/update-category/', [CategoryController::class, 'updateCategory'])->name('update-category');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

//Blog Crud
Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new-blog');
Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
Route::get('/blog-status/{id}', [BlogController::class, 'changeStatus'])->name('blog-status');
Route::post('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog');
Route::get('/edit-blog/{id}/{title}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('/update-blog/', [BlogController::class, 'updateBlog'])->name('update-blog');

//Service Crud
Route::get('/add-service', [ServiceController::class, 'addService'])->name('add-service');
Route::post('/new-service', [ServiceController::class, 'newService'])->name('new-service');
Route::get('/manage-service', [ServiceController::class, 'manageService'])->name('manage-service');
Route::get('/service-status/{id}', [ServiceController::class, 'changeStatus'])->name('service-status');
Route::get('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete-service');
Route::get('/edit-service/{id}', [ServiceController::class, 'editService'])->name('edit-service');
Route::post('/update-service/', [ServiceController::class, 'updateService'])->name('update-service');
