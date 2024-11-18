<!-- resources/views/rooms/booking.blade.php -->
@extends('layouts.app')

@section('content')
<div class="booking-hero-section">
    <h1>Welcome to EasyRent</h1>
</div>
<div class="booking-form-container">
    <!-- <form action="#" method="POST" class="booking-form"> -->
    <form action="{{ route('booking.submit') }}" method="POST" class="booking-form">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="first_name">First Name *</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name *</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="address1">Address 1 *</label>
                <input type="text" id="address1" name="address1" required>
            </div>
            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State *</label>
                <input type="text" id="state" name="state" required>
            </div>
            <div class="form-group">
                <label for="zip">Zip Code *</label>
                <input type="text" id="zip" name="zip" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone">Phone *</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="checkin_date">Check-in Date *</label>
                <input type="date" id="checkin_date" name="checkin_date" required>
            </div>
            <div class="form-group">
                <label for="checkin_time">Check-in Time *</label>
                <input type="time" id="checkin_time" name="checkin_time" required>
            </div>
            <div class="form-group">
                <label for="checkout_date">Check-out Date *</label>
                <input type="date" id="checkout_date" name="checkout_date" required>
            </div>
            <div class="form-group">
                <label for="checkout_time">Check-out Time *</label>
                <input type="time" id="checkout_time" name="checkout_time" required>
            </div>
        </div>
        <div class="form-group">
            <label for="room_preference">Room Preference</label>
            <select id="room_preference" name="room_preference" required>
                <option value="standard">Room 1</option>
                <option value="deluxe">Room 2</option>
                <option value="suite">Room 3</option>
            </select>
        </div>
        <div class="form-group">
            <label>Number of adults</label>
            <div class="adult-count">
                <input type="radio" id="adult1" name="adults" value="1">
                <label for="adult1">1</label>
                <input type="radio" id="adult2" name="adults" value="2">
                <label for="adult2">2</label>
                <input type="radio" id="adult3" name="adults" value="3">
                <label for="adult3">3</label>
                <input type="radio" id="adult4" name="adults" value="4">
                <label for="adult4">4</label>
            </div>
        </div>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>
@endsection


<!-- booking.blade.php: Booking form page, styled for capturing user information before booking. -->