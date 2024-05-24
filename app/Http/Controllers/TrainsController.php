<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index() {

        $oggi = date('Y-m-d');

        // $trains = Train::all();

        $trains = Train::whereDate('orario_partenza', '=', now()->toDateString())->get();
        
        return view('welcome', compact('trains'));
    }
}
