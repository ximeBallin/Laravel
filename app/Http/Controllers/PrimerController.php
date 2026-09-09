<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    function index() {
        $posts = ['post1','post2'];
        return view('contact', ['posts'=>$posts]);
    }

    function otro($post=40, $otro=50) {
        echo $post;
        echo $otro;
    }
}
