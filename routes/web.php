<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentRequestController;
use App\Http\Controllers\AllocateController;
use App\Http\Controllers\TaskPaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', CustomerController::class);
Route::get('products', [ProductController::class, 'index']);
Route::get('process-requests', [PaymentRequestController::class, 'processRequests']);
Route::get('allocate-budget', [AllocateController::class, 'AlocateBudget']);
Route::get('/process-tax-payments', [TaskPaymentController::class, 'processPayment']);
