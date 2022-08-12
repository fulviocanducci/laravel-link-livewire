<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Links;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/links', Links::class);
