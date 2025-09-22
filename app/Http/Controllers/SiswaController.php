<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    // Form create data
    public function create()
    {
        return view('siswa.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required',
            'kelas'   => 'required',
            'jurusan' => 'required',
        ]);

        DB::table('siswas')->insert([
            'nama'    => $request->nama,
            'kelas'   => $request->kelas,
            'jurusan' => $request->jurusan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('siswa.index');
    }

    // Tampilkan semua data
    public function index()
{
    $siswas = DB::table('siswas')->get(); // ambil semua data dari tabel siswas
    return view('siswa.index', compact('siswas'));
}


    // Form edit data
    public function edit($id)
    {
        $siswa = DB::table('siswas')->where('id', $id)->first();
        return view('siswa.edit', compact('siswa'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'    => 'required',
            'kelas'   => 'required',
            'jurusan' => 'required',
        ]);

        DB::table('siswas')
            ->where('id', $id)
            ->update([
                'nama'       => $request->nama,
                'kelas'      => $request->kelas,
                'jurusan'    => $request->jurusan,
                'updated_at' => now(),
            ]);

        return redirect()->route('siswa.index');
    }

    // Hapus data
    public function destroy($id)
    {
        DB::table('siswas')->where('id', $id)->delete();
        return redirect()->route('siswa.index');
    }
}
