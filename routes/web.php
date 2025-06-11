<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;

Route::get('/', function(){return PrincipalController::get();})->name('site.home');
Route::get('/cursos', function(){return PrincipalController::cursos();})->name('site.cursos');
Route::get('/departamentos', function(){return PrincipalController::departamentos();})->name('site.departamentos');
Route::get('/contato', function(){return PrincipalController::contato();})->name('site.contato');

Route::get('/adm', function(){return PrincipalController::adm();})->name('site.cursos.adm');
Route::get('/cont', function(){return PrincipalController::cont();})->name('site.cursos.cont');
Route::get('/ds', function(){return PrincipalController::ds();})->name('site.cursos.ds');
Route::get('/fin', function(){return PrincipalController::fin();})->name('site.cursos.fin');
Route::get('/log', function(){return PrincipalController::log();})->name('site.cursos.log');
Route::get('/rh', function(){return PrincipalController::rh();})->name('site.cursos.rh');
Route::get('/sj', function(){return PrincipalController::sj();})->name('site.cursos.sj');

Route::get('/sa', function(){return PrincipalController::sa();})->name('site.departamentos.sa');
Route::get('/cc', function(){return PrincipalController::cc();})->name('site.departamentos.cc');
Route::get('/dir', function(){return PrincipalController::dir();})->name('site.departamentos.dir');
Route::get('/cp', function(){return PrincipalController::cp();})->name('site.departamentos.cp');
Route::get('/apm', function(){return PrincipalController::apm();})->name('site.departamentos.apm');

use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
