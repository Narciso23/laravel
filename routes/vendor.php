<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Routes;

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard'); 
