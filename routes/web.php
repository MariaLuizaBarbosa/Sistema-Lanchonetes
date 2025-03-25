<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Login as LivewireLogin;
use App\Livewire\Auth\Login as AuthLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/cliente/create', Create::class);

Route::get('/produto/create', Create::class);

Route::get('/login', LivewireLogin::class);
