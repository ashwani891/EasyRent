<!-- resources/views/emails/booking_form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form Submission</title>
</head>
<body>
    <h2>New Booking Form Submission</h2>
    <p><strong>First Name:</strong> {{ $formData['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $formData['last_name'] }}</p>
    <p><strong>Address 1:</strong> {{ $formData['address1'] }}</p>
    <p><strong>Address 2:</strong> {{ $formData['address2'] ?? 'N/A' }}</p>
    <p><strong>City:</strong> {{ $formData['city'] }}</p>
    <p><strong>State:</strong> {{ $formData['state'] }}</p>
    <p><strong>Zip Code:</strong> {{ $formData['zip'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Email Address:</strong> {{ $formData['email'] }}</p>
    <p><strong>Check-in Date:</strong> {{ $formData['checkin_date'] }}</p>
    <p><strong>Check-in Time:</strong> {{ $formData['checkin_time'] }}</p>
    <p><strong>Check-out Date:</strong> {{ $formData['checkout_date'] }}</p>
    <p><strong>Check-out Time:</strong> {{ $formData['checkout_time'] }}</p>
    <p><strong>Room Preference:</strong> {{ $formData['room_preference'] }}</p>
    <p><strong>Number of Adults:</strong> {{ $formData['adults'] }}</p>
</body>
</html>


<!-- booking_form.blade.php: Template for the booking confirmation email. -->