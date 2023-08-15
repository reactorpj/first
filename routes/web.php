<?php

use App\Http\Controllers\Posts;
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

Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/{id}', [Posts::class, 'show']);
Route::get('/posts/create', [Posts::class, 'create']);
Route::post('/posts', [Posts::class, 'store']);
Route::get('/posts/{id}/edit', [Posts::class, 'edit']);
Route::put('/posts/{id}', [Posts::class, 'update']);
Route::delete('/posts/{id}', [Posts::class, 'delete']);
