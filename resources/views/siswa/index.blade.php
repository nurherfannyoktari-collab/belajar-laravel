@extends('layout')

@section('content')
<h2>Daftar Siswa</h2>
<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>
<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach($siswas as $siswa)
    <tr>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->jurusan }}</td>
        <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
