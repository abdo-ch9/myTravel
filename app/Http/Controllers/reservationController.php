<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    public function index()
    {
        return view("reservation.reservation");
    }

    public function reservationStore(Request $request)
    {
        $request->validate([
            "fname" => "required|min:3",
            "lname" => "required|min:3",
            "countryOfResidence" => "required|min:3",
            "phoneNumber" => "required|unique:reservations|digits_between:10,15",
            "email" => "required|email|unique:reservations",
            "dateReservation" => "required|date|after:today",
            "numberNight" => "required|integer|min:1",
            "numberOfAdults" => "required|integer|min:1",
            "numberOfChilds" => "required|integer|min:0",
            "howdiduknowaboutus" => "nullable|string"
        ]);

        $reservation = reservation::create([
            'user_id' => Auth::id(),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'countryOfResidence' => $request->input('countryOfResidence'),
            'phoneNumber' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'dateReservation' => $request->input('dateReservation'),
            'numberNight' => $request->input('numberNight'),
            'numberOfAdults' => $request->input('numberOfAdults'),
            'numberOfChilds' => $request->input('numberOfChilds'),
            'howdiduknowaboutus' => $request->input('howdiduknowaboutus'),

        ]);
        return redirect('reservation')->with('success', 'Your reservation has been added successfully.');
    }

    public function reservationShow($id)
    {
        $reservation = reservation::find($id);
        return view('reservation.reservationShow', ["reservation" => $reservation]);
    }
    public function editreservation($id)
    {
        $reservation = Reservation::find($id);
        return view('reservation.reservationupdate', ["reservation" => $reservation]);
    }
    public function updatereservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->update($request->all());
        return redirect()->route('reservationUser')->with('success', 'Reservation updated successfully');
    }
    public function  destroyreservation($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservationUser')->with('success', 'Reservation deleted successfully');
    }
}
