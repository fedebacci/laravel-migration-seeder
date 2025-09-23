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
        $trains = Train::where("departure_time", ">=", date("Y-m-d H:i:s"))->get();

        // todo: Filtro per nome agenzia (ricerca parziale)
        // $trains = Train::where("agency", "LIKE", "%a%"))->get();

        return view('home', compact('trains'));
    }
}
