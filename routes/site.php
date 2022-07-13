<?php
use Illuminate\Support\Facades\Route;
Route::group(['as' => 'site.'], function(){
    Route::get('/', [App\Http\Controllers\Agencia\HomeController::class, 'index'])->name('index');
    Route::get('/biografia', [App\Http\Controllers\Agencia\HomeController::class, 'bio'])->name('bio');
    Route::get('/condecoracoes', [App\Http\Controllers\Agencia\HomeController::class, 'tribute'])->name('tribute');

    Route::get('/noticias', [App\Http\Controllers\Agencia\PostController::class, 'index'])->name('post.index');
    Route::get('/noticia/{slug}', [App\Http\Controllers\Agencia\PostController::class, 'show'])->name('post.show');

    Route::get('/videos', [App\Http\Controllers\Agencia\VideoController::class, 'index'])->name('video.index');
});
