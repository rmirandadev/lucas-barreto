<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Gerente
Route::domain('gerente.'.env('SESSION_DOMAIN'))->group(function () {
    Auth::routes();
    Route::middleware(['auth'])->group(base_path('routes/gerente.php'));
});

//Site
Route::prefix('/')->group(base_path('routes/site.php'));

