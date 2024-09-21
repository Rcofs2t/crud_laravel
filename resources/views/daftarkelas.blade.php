<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
</head>
<body>
    <h1>Tugas 1</h1>
    <br>
    <p>kelas : {{ $kelas }}</p>
    <ul>
        @foreach ($namasiswa as $nama)
        <li>{{ $nama }}</li>
        @endforeach
    </ul>
</body>
</html>