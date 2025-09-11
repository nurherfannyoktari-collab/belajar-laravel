<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class UserController extends Controller
{
    public function index(){
        return "Daftar Mahasiswa";
    }

    public function show($id){
        return"Detail Mahasiswa dengan ID : " . $id;
}
}