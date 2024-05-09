<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('cursos/crear',[ProductController::class,'crear']);
Route::post('cursos/store', [ProductController::class,'store'])->name('cursos.store');
Route::get('cursos/show',[ProductController::class,'index'])->name('curso.index');*/

Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');

Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');

