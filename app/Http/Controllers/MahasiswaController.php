<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    //create data
public function create () {
    return view('mahasiswa.create');
}

public function store(Request $request) {

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'no_hp' => 'required',
    ]);

    DB::table('mahasiswas')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
    ]);

    return redirect()->route('mahasiswa.index');
}

    //read data
public function index()
{
    $mahasiswa = DB::table('mahasiswas')->get();
    return view('mahasiswa.index', compact('mahasiswa'));
}


    // Update data
public function edit($id)
{
    $mahasiswa = DB::table('mahasiswas')->where('id', $id)->first();
    return view('mahasiswa.edit', compact('mahasiswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name'   => 'required',
        'email'  => 'required',
        'no_hp'  => 'required',
    ]);

    DB::table('mahasiswas')
        ->where('id', $id)
        ->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'no_hp'      => $request->no_hp,
            'updated_at' => now(),
        ]);

    return redirect()->route('mahasiswa.index');
}


// Menghapus data
public function destroy($id)
{
    DB::table('mahasiswas')->where('id', $id)->delete();
    return redirect()->route('mahasiswa.index');
}

}
