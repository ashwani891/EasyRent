<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingFormMail;

class RoomController extends Controller
{
    // Display the list of rooms
    public function showRooms()
    {
        // Initialize room data in the session if not set
        if (!Session::has('available_rooms')) {
            Session::put('available_rooms', [
                'Room 1' => ['description' => 'A cozy room with a great view.', 'count' => 13, 'image' => 'room1.jpg'],
                'Room 2' => ['description' => 'Spacious room with a comfortable bed.', 'count' => 12, 'image' => 'room2.jpg'],
                'Room 3' => ['description' => 'Modern room with stylish decor.', 'count' => 14, 'image' => 'room3.jpg'],
            ]);
        }

        // Fetch rooms from the session
        $rooms = Session::get('available_rooms');

        return view('rooms.index', compact('rooms'));
    }
//..................................................................
    public function submitBookingForm(Request $request)
{
    // Validate form data
    $validatedData = $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'address1' => 'required|string',
        'address2' => 'nullable|string',
        'city' => 'required|string',
        'state' => 'required|string',
        'zip' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
        'checkin_date' => 'required|date',
        'checkin_time' => 'required',
        'checkout_date' => 'required|date',
        'checkout_time' => 'required',
        'room_preference' => 'required|string',
        'adults' => 'required|integer',
    ]);

    // Send email with form data
    Mail::to('ashwanig969@gmail.com')->send(new BookingFormMail($validatedData));

    // Redirect back with success message
    return redirect()->back()->with('success', 'Your booking request has been sent successfully!');
}
//..................................................................


    // Handle room booking
    public function bookRoom(Request $request)
    {
        $rooms = Session::get('available_rooms');
        $roomName = $request->input('room_name');

        // Decrease room count if available
        if ($rooms[$roomName]['count'] > 0) {
            $rooms[$roomName]['count']--;
            Session::put('available_rooms', $rooms);  
            return redirect()->route('rooms.show')->with('success', 'Room booked successfully!');
        }

        return redirect()->route('rooms.show')->with('error', 'No rooms available.');
    }
}


// RoomController.php: Manages room listing, booking functionality, and session data for available rooms.
// put is a method used to store data in various types of storage, particularly sessions, caches, and the file system.
