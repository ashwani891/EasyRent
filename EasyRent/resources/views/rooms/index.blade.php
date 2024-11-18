@extends('layouts.app')

@section('content')
<div class="hero-section">
    <h1>Room Rental</h1>
    <p>Find the perfect room for your stay.</p>
    <button onclick="window.location='{{ route('rooms.booking') }}'" class="btn">Book Now</button>

</div>

<div class="room-list">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @foreach($rooms as $roomName => $room)
        <div class="room-card">
            <img src="{{ asset('images/' . $room['image']) }}" alt="{{ $roomName }}" class="room-image">
            <h3>{{ $roomName }}</h3>
            <p>{{ $room['description'] }}</p>
            <p>Available: {{ $room['count'] }}</p>

            <form action="{{ route('rooms.book') }}" method="POST">
                @csrf
                <input type="hidden" name="room_name" value="{{ $roomName }}">
                <button type="submit" class="btn" {{ $room['count'] == 0 ? 'disabled' : '' }}>
                    Book Now
                </button>
            </form>
        </div>
    @endforeach
</div>
@endsection


<!-- index.blade.php: Displays the list of rooms with booking options. -->