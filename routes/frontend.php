<?php

use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\PackageInquiryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/{slug}', [FrontendController::class, 'pagesingle'])->name('pagesingle');

Route::get('/blogs/{slug}', [FrontendController::class, 'blogsingle'])->name('blogsingle');
Route::get('/categories/{slug}', [FrontendController::class, 'categorysingle'])->name('categorysingle');

Route::get('/packages/{slug}', [FrontendController::class, 'packagessingle'])->name('packagessingle');
Route::get('/destinations/{slug}', [FrontendController::class, 'destinationsingle'])->name('destinationsingle');
Route::get('/activities/{slug}', [FrontendController::class, 'activitiessingle'])->name('activitiessingle');

Route::get('/services/{slug}', [FrontendController::class, 'servicesingle'])->name('servicesingle');
Route::get('/projects/{slug}', [FrontendController::class, 'projectsingle'])->name('projectsingle');


Route::post('/inquiry', [ContactsController::class, 'inquiry'])->name('inquiry');
Route::post('/pkbooking', [PackageInquiryController::class, 'pkbooking'])->name('pkbooking');
