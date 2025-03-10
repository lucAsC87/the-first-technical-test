<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\books;
use App\Models\controllers;
use App\Models\availability_status;
use App\Models\member_status;
use App\Models\authors;
use App\Models\reservations;
use App\Models\loans;
use App\Models\members;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AvailabilityStatusController;
use App\Http\Controllers\MemberStatusController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\MembersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('books', BookController::class);

Route::resource('categories', CategoriesController::class);

Route::resource('member_status', MemberStatusController::class);

Route::resource('availability_status', AvailabilityStatusController::class);

Route::resource('authors', AuthorsController::class);

Route::resource('reservations', ReservationsController::class);

Route::resource('loans', LoansController::class);

Route::resource('members', MembersController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
