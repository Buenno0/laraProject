<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
Route::resource('users', UserController::class);

Route::get('/clear', function () {
    User::truncate();
    return 'Tabela limpa com sucesso!';
});

