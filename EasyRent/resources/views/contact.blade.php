@extends('layouts.app')

@section('content')
<div class="contact-page">
    <div class="contact-left">
        <img src="{{ asset('images/email-icon.png') }}" alt="Email Icon" class="contact-icon">
    </div>
    <div class="contact-right">
        <h2>Get in touch</h2>
        
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send</button>
        </form>
    </div>
</div>
@endsection

<!-- contact.blade.php: Contact Us form that users fill to send messages to the website owner. -->