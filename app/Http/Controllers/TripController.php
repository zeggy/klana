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

    public function searchTrip($keywords) {
        $trips = Trip::where(['location', '%' . $keywords . '%']);
    }
}
