<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

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
Route::get('/api/subjects/{id}', [SubjectController::class, 'show']);
Route::post('/api/subjects', [SubjectController::class, 'store']);
Route::put('/api/subjects/{id}', [SubjectController::class, 'update']);
Route::delete('/api/subjects/delete/{id}', [SubjectController::class, 'destroy']);

// Subject View
Route::get('/subjects/new', [SubjectController::class, 'newView']);
Route::get('/subjects/list', [SubjectController::class, 'listView']);
Route::get('/subjects/edit/{id}', [SubjectController::class, 'editView']);
Route::get('/subjects/show/{id}', [SubjectController::class, 'showView']);

// Users
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users', [UserController::class, 'store']);
Route::put('/api/users/{id}', [UserController::class, 'update']);
Route::delete('/api/users/delete/{id}', [UserController::class, 'destroy']);

// Users View
Route::get('/users/new', [UserController::class, 'newView']);
Route::get('/users/list', [UserController::class, 'listView']);
Route::get('/users/edit/{id}', [UserController::class, 'editView']);
Route::get('/users/show/{id}', [UserController::class, 'showView']);