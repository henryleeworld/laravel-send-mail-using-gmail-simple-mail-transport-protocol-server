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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('send-mail', function () {
    $details = [
        'title' => '測試信標題',
        'body'  => '這是測試信'
    ];
    Mail::to('henryleeworld@gmail.com')->send(new MyTestMail($details));
    dd("電子郵件已經發送。");
});
