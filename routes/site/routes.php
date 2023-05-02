<?php

use App\Enum\Status;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
