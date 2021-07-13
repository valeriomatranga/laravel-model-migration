<?php

namespace App\Http\Controllers;

use CreatePacchettiTable;
use Illuminate\Http\Request;

use App\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        //ddd($travels);
        return view('homepage', compact('travels'));
    }

}
