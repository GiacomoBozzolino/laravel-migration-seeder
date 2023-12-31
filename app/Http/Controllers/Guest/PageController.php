<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;
use App\Models\Station;

class PageController extends Controller
{
    public function index(){
        // $trains = Train::all();
        $trains = Train::whereDate('orario_partenza', '=','2023-07-26')->get(); //con data statica
        $stations=Station::all();
        // Oppure per avere la data di oggi dinamica ->  $trains = Train::whereDate('orario_partenza', '=', Carbon::now())->get();
        return view('home', compact('trains','stations'));
    }
}
