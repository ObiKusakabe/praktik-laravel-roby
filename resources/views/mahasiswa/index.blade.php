<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
        @foreach ($data as $m)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->nim}}</td>
                <td>{{$m->jurusan}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>