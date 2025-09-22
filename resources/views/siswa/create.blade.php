@extends('layout')

@section('content')
<h2>Tambah Siswa</h2>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama"><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas"><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="jurusan"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
