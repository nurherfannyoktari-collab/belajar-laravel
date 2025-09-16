<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class MahasiswaController extends Controller
{
    //create data
    public function store(Request $request){
        $mahasiswa = Mahasiswa::create($request->all());
        return $mahasiswa;
    }

    //read data
    public function index(){
        return Mahasiswa::all();
    }


}
