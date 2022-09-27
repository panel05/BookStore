<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CopyController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/copies', [CopyController::class, 'index']);
Route::get('/api/copies/{id}', [CopyController::class, 'show']);
Route::post('/api/copies', [CopyController::class, 'store']);
Route::put('/api/copies/{id}', [CopyController::class, 'update']);
Route::delete('/api/copies/{id}', [CopyController::class, 'destroy']);


//view itt kezdődnek
// VIEW - ahol megjeleníthetem az adatokat
// Új task létrehozása:
Route::get('copy/new', [CopyController::class, 'newView']);
// Task módosítása:
Route::get('copy/edit/{id}', [CopyController::class, 'editView']);
// Task-ok kilistázása:
Route::get('copy/list', [CopyController::class, 'listView']);
