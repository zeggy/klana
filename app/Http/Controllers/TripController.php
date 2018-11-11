<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Trip;
use App\Model\Review;

class TripController extends Controller
{
    public function index() {
        $trips = Trip::paginate(4);

        return view('home', compact('trips'));
    }

    public function showAllTrips() {
        $trips = Trip::all();

        return view('explore', compact('trips'));
    }

    public function getTripDetail(Trip $trip) {
        return view('trips', compact('trip'));
    }

    public function searchTrip(Request $request) {
        $trips = Trip::where('location', 'like', '%' . $request->destination)->get();

        return view('explore', compact('trips'));
    }
}
