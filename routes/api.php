<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TherapistContoller;
use App\Http\Controllers\TreatmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    // Location
    Route::get('/locations', [LocationController::class, 'getAll']);

    // Treatments
    Route::get('/treatments/{locationId}', [TreatmentController::class, 'getByLocation']);

    // Appointments
    Route::post('/appointments/check-slots', [AppointmentController::class, 'checkSlots']);
    Route::post('/appointments/save-booking', [AppointmentController::class, 'saveBooking']);
    Route::get('/appointments/{id}', [AppointmentController::class, 'detail']);

    //Therapist
    Route::get('/therapists/{treatmentId}', [TherapistContoller::class, 'getByTreatment']);
});
