<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Login as LivewireLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/cliente/create', Create::class);


Route::get('/login', LivewireLogin::class);
