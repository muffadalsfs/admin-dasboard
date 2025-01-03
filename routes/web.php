<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
Route::get('/', function () {
    return redirect('dashboard');
});
route::view('form','user');
route::post('form',[FormController::class,'Tool']);