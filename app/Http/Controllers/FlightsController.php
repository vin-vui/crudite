<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    public function readAll()
    {
        $flights = Flight::all();
        // dd($flights);

        return view('flights', compact('flights'));
    }
}
