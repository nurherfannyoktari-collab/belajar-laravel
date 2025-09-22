<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>No HP</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->name }}</td>
            <td>{{ $mhs->email }}</td>
            <td>{{ $mhs->no_hp }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
