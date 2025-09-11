<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return "Selamat Datang Di Halaman Home!";
    }

    public function about(){
        return "Ini adalah halaman About.";
}
}