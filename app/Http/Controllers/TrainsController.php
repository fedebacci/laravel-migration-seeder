<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index() {

        // -  Tutti i treni indiscriminatamente
        // $trains = Train::all();

        // - Solo quelli che partono da oggi in avanti
        $trains = Train::where("departure_time", ">=", date("Y-m-d H:i:s"))->orderBy('departure_time', 'asc')->limit(10)->get();
        
        $trainsLocalArrivals = Train::where("arrival_station", "LIKE", "%Borgo%", "AND", "arrival_time", ">=", date("Y-m-d H:i:s"))->orderBy('arrival_time', 'asc')->get();
        
        $trainsLocalDepartures = Train::where("departure_station", "LIKE", "%Borgo%", "AND", "departure_time", ">=", date("Y-m-d H:i:s"))->orderBy('departure_time', 'asc')->get();


        // // - Solo quelli che partono oggi (ne ieri ne domani)
        // $trains = Train::where("departure_time", ">=", date("Y-m-d H:i:s"), "AND", "departure_time", "<=", date("Y-m-d H:i:s"))->get();

        // todo: Filtro per nome agenzia (ricerca parziale)
        // $trains = Train::where("agency", "LIKE", "%a%"))->get();

        return view('home', compact('trains', 'trainsLocalArrivals', 'trainsLocalDepartures'));
    }
}
