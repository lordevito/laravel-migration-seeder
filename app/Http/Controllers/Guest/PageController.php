<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $risposta = config("data");
        $dati = [
            "trains" => Train::where('giorno_di_partenza', 2024-01-30)->get()
        ];

        return view('home', $dati);
    }
}
