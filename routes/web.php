<?php

use App\Livewire\Counter1;
use App\Livewire\CounterOverview;
use Illuminate\Support\Facades\Route;

Route::get('/', CounterOverview::class);

Route::get('/counter1', Counter1::class);
