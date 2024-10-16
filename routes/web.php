<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PeopleController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ServicesController;

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

Route::get('/', [HomeController::class , 'index'])->name('index');
Route::get('/about-us', [AboutUsController::class , 'index'])->name('about');
Route::get('/blog-details/id', [BlogController::class , 'index_details'])->name('blog.details');
Route::get('/blogs', [BlogController::class , 'index'])->name('blog');
Route::get('/career', [CareerController::class , 'index'])->name('career');
Route::get('/contact-us', [ContactUsController::class , 'index'])->name('contact');
Route::get('/people', [PeopleController::class , 'index'])->name('people');
Route::get('/project-details/id', [ProjectController::class , 'index_details'])->name('project.details');
Route::get('/projects', [ProjectController::class , 'index'])->name('projects');
Route::get('/services', [ServicesController::class , 'index'])->name('services');

