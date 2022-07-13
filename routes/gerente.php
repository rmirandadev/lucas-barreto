<?php
use Illuminate\Support\Facades\Route;
Route::get('/', [App\Http\Controllers\Gerente\DashboardController::class, 'index'])->name('home')->middleware('auth');

//Admin
Route::resource('user',\App\Http\Controllers\Gerente\UserController::class)->middleware('role:Administrador');
Route::resource('profile',\App\Http\Controllers\Gerente\ProfileController::class)->middleware('role:Administrador');

//Dashboard
Route::resource('banner',\App\Http\Controllers\Gerente\BannerController::class)->middleware('role:Administrador|Editor');
Route::resource('social',\App\Http\Controllers\Gerente\SocialController::class)->middleware('role:Administrador|Editor');
Route::resource('video',\App\Http\Controllers\Gerente\VideoController::class)->middleware('role:Administrador|Editor');
Route::resource('communication',\App\Http\Controllers\Gerente\CommunicationController::class,['only' => ['show','edit', 'update']])->middleware('role:Administrador|Assessor');
Route::resource('post',\App\Http\Controllers\Gerente\PostController::class)->middleware('role:Administrador|Editor|Assessor');
Route::resource('bio',\App\Http\Controllers\Gerente\BioController::class)->middleware('role:Administrador|Editor|Assessor');
Route::resource('tribute',\App\Http\Controllers\Gerente\TributeController::class)->middleware('role:Administrador|Editor|Assessor');
Route::resource('life',\App\Http\Controllers\Gerente\LifeController::class)->middleware('role:Administrador|Editor|Assessor');
Route::get('get-subcategory/{id}',[\App\Http\Controllers\Gerente\PostController::class,'getSubcategory'])->name('get-subcategory')->middleware('role:Administrador|Editor');
