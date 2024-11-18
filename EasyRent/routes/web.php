<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'showRooms'])->name('rooms.show');
Route::post('/rooms/book', [RoomController::class, 'bookRoom'])->name('rooms.book');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

//................................................


Route::get('/about', function () {
    return view('about');
})->name('about');

//---------------------------------------------------
Route::get('/booking', function () {
    return view('rooms.booking');
})->name('rooms.booking');

//................................................
Route::post('/booking/submit', [RoomController::class, 'submitBookingForm'])->name('booking.submit');