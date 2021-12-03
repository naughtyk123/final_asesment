<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('runner/{runnerId}/form-data', [Controller::class, 'getdata']);

