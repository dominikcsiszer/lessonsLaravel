<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;

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

// Subjects
Route::get('/api/subjects', [SubjectController::class, 'index']);
Route::get('/api/subjects/:id', [SubjectController::class, 'show']);
Route::post('/api/subjects', [SubjectController::class, 'store']);
Route::put('/api/subjects/:id', [SubjectController::class, 'update']);
Route::delete('/api/subjects/delete/:id', [SubjectController::class, 'destroy']);

// Subject View
Route::get('/subjects/new', [SubjectController::class, 'newView']);
Route::get('/subjects/list', [SubjectController::class, 'listView']);
Route::get('/subjects/edit/:id', [SubjectController::class, 'editView']);