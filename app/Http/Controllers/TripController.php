<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index() {

        //PAGINATE
        $trips = Trip::paginate(3);

        //$trips = Trip::all();

        return view( ('trips'), compact('trips') );
    }
}
