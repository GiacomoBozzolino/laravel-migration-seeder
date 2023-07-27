<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Station;

class StationController extends Controller
{
    public function index(){
        $stations = Station::all();
        return view('home', compact('stations'));
    }
}
