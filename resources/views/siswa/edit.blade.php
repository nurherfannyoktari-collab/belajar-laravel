@extends('layout')

@section('content')
<h2>Edit Siswa</h2>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="jurusan" value="{{ $siswa->jurusan }}"><br><br>

    <button type="submit">Update</button>
</form>
@endsection

