<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AccesoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/',[InicioController::class,'index'])->name('inicio'); 

//RUTAS ACCESO
Route::get('/acceso/perfil/{id}',[AccesoController::class,'perfil'])->name('perfil');
Route::get('/acceso/login',[AccesoController::class,'acceso_login'])->name('acceso_login');
Route::get('/acceso/loginout',[AccesoController::class,'logout'])->name('logout');
Route::POST('/acceso/login',[AccesoController::class,'acceso_login_post'])->name('acceso_login_post');
Route::get('/acceso/registro',[AccesoController::class,'acceso_registro'])->name('acceso_registro');
Route::post('/acceso/registro',[AccesoController::class,'acceso_registro_post'])->name('acceso_registro_post');

//EXPOTAR EXCEL
Route::get('/reloj/', [ExcelController::class, 'reloj'])->name('reloj');
Route::get('/export-excel', [ExcelController::class, 'exportar'])->name('exportar');
Route::post('/reloj/migra_archivo', [ExcelController::class, 'uploadExcel'])->name('uploadExcel');


