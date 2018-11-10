<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function explore() {
        //$trips = Trip::all();
        return view ('explore');
    }
    public function featured() {
        //$trips = Trip::all();
        return view ('trips');
    }
    public function resources() {
        //$trips = Trip::all();
        return view ('resources');
    }
}
