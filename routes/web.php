<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/codes', [QrCodeGeneratorController::class, 'generate']);
