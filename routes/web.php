<?php

use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
Route::get('send-mail', function () {
    $details = [
        'title' => __('Test letter title'),
        'body'  => __('This is the test letter'),
    ];
    Mail::to('henryleeworld@gmail.com')->send(new MyTestMail($details));
    dd(__('Email has been sent.'));
});
