<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\GeneradorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/',[AccesoController::class,'acceso_login'])->name('inicio'); 

//RUTAS ACCESO
Route::get('/acceso/perfil/{id}',[AccesoController::class,'perfil'])->name('perfil');
Route::get('/acceso/login',[AccesoController::class,'acceso_login'])->name('acceso_login');
Route::get('/acceso/loginout',[AccesoController::class,'logout'])->name('logout');
Route::POST('/acceso/login',[AccesoController::class,'acceso_login_post'])->name('acceso_login_post');
Route::get('/acceso/registro',[AccesoController::class,'acceso_registro'])->name('acceso_registro');
Route::post('/acceso/registro',[AccesoController::class,'acceso_registro_post'])->name('acceso_registro_post');
Route::get('/acceso/acceso_aplicaciones',[AccesoController::class,'acceso_aplicaciones'])->name('acceso_aplicaciones');

//EXPOTAR EXCEL
Route::get('/reloj/', [ExcelController::class, 'reloj'])->name('reloj');
Route::get('/export-excel', [ExcelController::class, 'exportar'])->name('exportar');
Route::post('/reloj/migra_archivo', [ExcelController::class, 'uploadExcel'])->name('uploadExcel');

//PERSONAS
Route::get('/personas', [PersonasController::class, 'index'])->name('index');

//GENERADOR
Route::get('/generador', [GeneradorController::class, 'tablas'])->name('tablas');
Route::post('/generador/campos/', [GeneradorController::class, 'campos'])->name('campos');

//PROYECTOS
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos');


