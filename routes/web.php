<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsMessageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/insert-message/{id?}', [SmsMessageController::class, 'action'])->name('sms.insert');
Route::post('/save-message/{id?}', [SmsMessageController::class, 'store'])->name('sms.store');
Route::get('/read-message', [SmsMessageController::class, 'read'])->name('sms.read');
Route::get('/total-messages', [SmsMessageController::class, 'total'])->name('sms.total');
Route::get('/all-messages', [SmsMessageController::class, 'all'])->name('sms.all');

