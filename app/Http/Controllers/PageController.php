<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where("Numero_Carrozze", ">", 50)->get();
        /* $trains = Train::where('Stazione_di_partenza', 'Milano')->get(); */
        return view('home', compact('trains'));
    }
}
