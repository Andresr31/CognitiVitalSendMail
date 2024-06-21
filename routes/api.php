<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MailController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/v1/email-gift', [MailController::class, 'sendMailGift']);

Route::post('/v1/email-contact', [MailController::class, 'sendMailContact']);
