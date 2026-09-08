<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    function index(){
        return view('contact', ['name' => 'Ximena']);

    }
}
