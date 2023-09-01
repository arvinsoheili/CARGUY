<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Cars extends Controller
{
    public function create() {
        return view('cars.create');
    } 
}
