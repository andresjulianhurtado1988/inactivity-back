<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InactivyController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/createInactivity', [InactivyController::class, 'createInactivity'])->name('createInactivity');
Route::post('/createActivity', [InactivyController::class, 'createActivity'])->name('createActivity');

Route::post('/verTabla', [ExcelController::class, 'verTabla'])->name('verTabla');
Route::post('/createExcel', [ExcelController::class, 'createExcel'])->name('createExcel');
Route::get('/verTiendas', [ExcelController::class, 'verTiendas'])->name('verTiendas');

Route::post('/verEmpleados', [ExcelController::class, 'verEmpleados'])->name('verEmpleados');


Route::get('/verConceptos', [CuentasController::class, 'verConceptos'])->name('verConceptos');

Route::get('/verCuentas', [CuentasController::class, 'verCuentas'])->name('verCuentas');
Route::post('/concepto_cuenta', [CuentasController::class, 'concepto_cuenta'])->name('concepto_cuenta');

Route::post('/verTablaCuentas', [CuentasController::class, 'verTablaCuentas'])->name('verTablaCuentas');

Route::post('/detalleConceptos', [CuentasController::class, 'detalleConceptos'])->name('detalleConceptos');

Route::post('/descargarArchivo', [FileController::class, 'descargarArchivo'])->name('descargarArchivo');
