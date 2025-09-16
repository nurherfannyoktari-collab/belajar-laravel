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

    // update data
public function update(Request $request, $id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->update($request->all());

    return $mahasiswa;
}

// delete data
public function destroy($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->delete();

    return $mahasiswa;
}


}
