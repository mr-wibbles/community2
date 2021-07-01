<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/projects/create', [ProjectsController::class, 'create']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/{project}/', [ProjectsController::class, 'view']);
Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit']);
Route::post('/projects', [ProjectsController::class, 'store']);
Route::put('/projects/{project}', [ProjectsController::class, 'update']);

require __DIR__.'/auth.php';
