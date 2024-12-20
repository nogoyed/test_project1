<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UeController;
use App\Http\Controllers\AnneeScolaireController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('ues', [UeController::class, 'store']);
Route::post('annee', [AnneeScolaireController::class, 'store']);