<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ChatbotController;

// Portfolio Homepage
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Chatbot Secure Backend Route
Route::post('/chatbot/message', [ChatbotController::class, 'message'])->name('chatbot.message');
