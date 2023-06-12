<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSpreadsheetController;
use App\Http\Controllers\AdminGoogleController;


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

Route::group(['middleware'=>['UserAuth']],function(){
    Route::get('/', [GoogleSpreadsheetController::class, 'stepOne'])->middleware('guest');

    Route::get('admin', [AdminGoogleController::class, 'index']);
    Route::POST('inventory', [AdminGoogleController::class, 'inventory']);  
});
       
Route::get('step-two/{category}', [GoogleSpreadsheetController::class, 'stepTwo']);
Route::get('step-three/{subcategory}', [GoogleSpreadsheetController::class, 'stepThree']);

Route::get('measurement-material/{material}', [GoogleSpreadsheetController::class, 'measurementAndMaterial']);

Route::get('backup-material/{material}', [GoogleSpreadsheetController::class, 'backupMaterial']);

Route::get('material-selection/{selection}', [GoogleSpreadsheetController::class, 'getMaterialSelection']);

Route::get('backup-material-selection/{selection}', [GoogleSpreadsheetController::class, 'getBackupMaterialSelection']);

Route::get('energizer/{selection}', [GoogleSpreadsheetController::class, 'energizer']);


Route::get('measurements/{inchmetric}', [GoogleSpreadsheetController::class, 'getMmData']);
Route::get('seal-gland/{sealgland}', [GoogleSpreadsheetController::class, 'sealGland']);
Route::get('seal-height/{sealheight}', [GoogleSpreadsheetController::class, 'sealHeight']);
Route::get('rush-order/{rushorder}', [GoogleSpreadsheetController::class, 'rushOrder']);


Route::get('id/{id}', [GoogleSpreadsheetController::class, 'id']);
Route::get('od/{od}', [GoogleSpreadsheetController::class, 'od']);
Route::get('ht/{ht}', [GoogleSpreadsheetController::class, 'ht']);
Route::any('quantity', [GoogleSpreadsheetController::class, 'quantity']);
Route::get('output', [GoogleSpreadsheetController::class, 'output']);

Route::get('quantityMsg', [GoogleSpreadsheetController::class, 'getQuantityMsg']);

Route::get('thickness/{thickness}', [GoogleSpreadsheetController::class, 'thickness']);

Route::get('importCsv', [GoogleSpreadsheetController::class, 'importCSV']);



Route::get('/download-pdf', [GoogleSpreadsheetController::class, 'downloadPDF']);


// Login route
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login.submit');

// Logout route
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

     











