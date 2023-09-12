<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
//Models
use App\Models\Train;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function contatti() {
        return view('contatti');
    }

    public function chi_siamo() {
        return view('chi_siamo');
    }

    public function documentazione() {
        return view('documentazione');
    }
}
