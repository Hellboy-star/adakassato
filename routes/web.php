<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\EvenController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrediController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProposController;
use App\Http\Controllers\SousController;
use App\Http\Controllers\SujetsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', HomeController::class);
Route::resource('/dashboard', DashController::class);
Route::resource('/evenement', EvenController::class);
Route::resource('/predication', PrediController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/souscription', SousController::class);
Route::resource('/blog', BlogController::class);
Route::resource('/apropos', ProposController::class);
Route::resource('/sujet', SujetsController::class);
Route::resource('/galerie', GalerieController::class);
Route::resource('/comment', CommentController::class);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
Route::get('/evenement', [EvenController::class, 'index'])->name('even');
Route::get('/predication', [PrediController::class, 'index'])->name('predi');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/souscription', [SousController::class, 'index'])->name('sous');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/sujet', [SujetsController::class, 'index'])->name('sujets');
Route::get('/formulaire', [ProfileController::class, 'form'])->name('formulaire');
Route::get('/apropos', [ProposController::class, 'index'])->name('apropos');
Route::get('/galerie', [GalerieController::class, 'index'])->name('galerie');
Route::get('/contact', [ProposController::class, 'contact'])->name('contact');
Route::get('/e-predi/{predication}', [PrediController::class, 'view'] );
//Route::get('/view', [PrediController::class, 'view'])->name('apropos');
//Route::get('/download', [PrediController::class, 'download'])->name('apropos');
// Route::get('/view', "Predicontroller@view");
Route::post('/blog/{sujets}', 'BlogController@store')->name('blog.store');
Route::get('/download', "Predicontroller@download");
