<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\RecordingController;
use App\Http\Controllers\RecordingPageController;

Route::get('/', [RecordingPageController::class, 'index']);


Route::post('/start-recording', [RecordingController::class, 'startRecording']);

