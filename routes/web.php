<?php

use App\Http\Controllers\StartController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\AnimationController;
use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Models\Lists;
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

// Route::get('/', function () {
//     return view('start');
// });

Route::get('/', [StartController::class, 'index']);

Route::get('/lista-aktualności', [NewsController::class, 'list']);
Route::get('/lista-aktualności-archiwum', [NewsController::class, 'archive']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Struktura CMS */

// lista
Route::get('/home/struktura', [StructureController::class, 'index']);
Route::get('/home/struktura/dodaj-element', [StructureController::class, 'create'])->name('cms.dodaj_element');
Route::post('/home/struktura/zapisz-element', [StructureController::class, 'store'])->name('cms.zapisz_element');
Route::get('/home/edytuj_element/{id}', [StructureController::class, 'showData']);
Route::get('/home/edytuj_tresc_elementu/{id}', [StructureController::class, 'showData_info']);
Route::post('/home/zaktualizuj_element/{id}', [StructureController::class, 'update']);
Route::post('/home/zaktualizuj_tresc_elementu/{id}', [StructureController::class, 'update_info']);
Route::get('/home/usun-pozycje', [StructureController::class, 'index']);
Route::get('/home/usun-pozycje/{id}', [StructureController::class, 'destroy']);

$lists = Lists::all();
foreach($lists as $list){
    Route::get('/'.$list->title.'-'.$list->id, [StartController::class, 'subpageInfo']);
}

/**/

// Animacja CMS
Route::get('/home/animacja', [AnimationController::class, 'index']);
Route::get('/home/animacja/dodaj-animacje', [AnimationController::class, 'create'])->name('cms.dodaj_animacje');
Route::post('/home/animacja/zapisz', [AnimationController::class, 'store'])->name('cms.zapisz');
Route::get('/home/edytuj_animacje/{id}', [AnimationController::class, 'showData']);
Route::post('/home/zaktualizuj/{id}', [AnimationController::class, 'update']);
Route::get('/home/delete-records', [AnimationController::class, 'index']);
Route::get('/home/delete/{id}', [AnimationController::class, 'destroy']);

// Aktualności CMS
Route::get('/home/aktualności', [NewsController::class, 'index']);
Route::get('/home/aktualności/dodaj-aktualnosc', [NewsController::class, 'create'])->name('cms.dodaj_aktualnosc');
Route::post('/home/aktualności/zapisz', [NewsController::class, 'store'])->name('cms.zapisz_aktualnosc');
Route::get('/home/edytuj_aktualność/{id}', [NewsController::class, 'showData']);
Route::post('/home/save_news/{id}', [NewsController::class, 'update']);
Route::get('/home/delete-records', [NewsController::class, 'index']);
Route::get('/home/usun-aktualnosc/{id}', [NewsController::class, 'destroy']);

$news = News::all();
foreach($news as $new){
    Route::get('/'.$new->title.'-'.$new->id, [StartController::class, 'subpage']);
}

// Użytkownicy
Route::get('/home/uzytkownicy', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/home/uzytkownicy/dodaj-uzytkownika', [App\Http\Controllers\UserController::class, 'create'])->name('cms.dodaj_uzytkownika');
Route::post('/home/uzytkownicy/zapisz', [App\Http\Controllers\UserController::class, 'store'])->name('cms.zapisz_uzytkownika');
Route::get('delete-records','DeleteUserController@index');
Route::get('delete/{id}', [App\Http\Controllers\DeleteUserController::class, 'destroy']);
Route::get('users/edytuj_uzytkownika/{id}', [App\Http\Controllers\UserController::class, 'showData']);
Route::post('users/edytuj_uzytkownika', [App\Http\Controllers\UserController::class, 'update']);


