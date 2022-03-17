<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TravelPackage;

class PageController extends Controller
{
    public function index(){

        $lista_viaggi = TravelPackage::all();
        return view('home', ['lista_viaggi' => $lista_viaggi]);
    }
}
