@extends('layouts.app')

@section('content')
<div class="about-hero-section">
    <h1>About Us</h1>
    <p>Discover the elegance and comfort of EasyRent - your perfect getaway destination.</p>
</div>

<div class="about-content">
    <div class="about-text">
        <h2>Our Services</h2>
        <p>
            At EasyRent, we offer a variety of luxurious rooms to cater to your needs. Our aim is to provide a comfortable and relaxing experience. 
            Whether you're here for business or leisure, our top-quality services ensure that your stay is memorable. From spacious rooms to modern amenities,
            we bring you the best in hospitality. Book your stay with us and enjoy a stress-free and enjoyable experience.
        </p>
        <ul>
            <li>Free Wi-Fi and high-speed internet access</li>
            <li>24/7 customer support and room service</li>
            <li>In-room dining options with delicious cuisines</li>
            <li>Gym and swimming pool access</li>
            <li>Special packages for long-term stays</li>
        </ul>
    </div>

    <div class="about-images">
        <img src="{{ asset('images/room1.jpg') }}" alt="Room 1" class="about-image">
        <img src="{{ asset('images/room2.jpg') }}" alt="Room 2" class="about-image">
        <img src="{{ asset('images/room3.jpg') }}" alt="Room 3" class="about-image">
    </div>
</div>

<div class="about-footer">
    <h3>Experience Comfort Like Never Before!</h3>
    <p>Book your stay today and make lasting memories with us at EasyRent.</p>
</div>
@endsection


<!-- about.blade.php: The About Us page, styled to present information about the service. -->