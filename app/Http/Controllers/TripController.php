<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index() {

        // PAGINATION
        $trips = Trip::paginate(3);

        return view( ('trips'), compact('trips') );
    }
}
