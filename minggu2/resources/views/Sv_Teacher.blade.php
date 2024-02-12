<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager</title>
</head>
<body>
    <p>DAFTAR GURU</p>
    <br>
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        <!--Looping melalui data yang diberikan-->
        @foreach($data as $item)
            <tr>
                <!--menampilkan nilai dari properti id-->
                <td>{{ $item->id }}</td>
                <!--menampilkan nilai dari properti nama-->
                <td>{{ $item->nama }}</td>
                <!--menampilkan nilai dari properti mapel-->
                <td>{{ $item->mapel }}</td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
