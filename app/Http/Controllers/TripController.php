<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Trip;

class TripController extends Controller
{
    public function index() {
        $trips = Trip::paginate(4);

        return view('trips', compact('trips'));
    }

    public function searchTrip(Request $request) {
        $trips = Trip::where('location', 'like', '%' . $request->destination)->get();

        return view('explore', compact('trips'));
    }
}
