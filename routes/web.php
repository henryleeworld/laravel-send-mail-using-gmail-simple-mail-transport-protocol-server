<?php

use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('send-mail', function () {
    $details = [
        'title' => __('Test letter title'),
        'body'  => __('This is the test letter'),
    ];
    Mail::to('henryleeworld@gmail.com')->send(new MyTestMail($details));
    dd(__('Email has been sent.'));
});
