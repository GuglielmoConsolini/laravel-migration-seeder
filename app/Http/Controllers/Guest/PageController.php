<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = Train::all();

        $dati = [
            "trainslist" => $trains
        ];

        return view("home", $dati);

    }
}
