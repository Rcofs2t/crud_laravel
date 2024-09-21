<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 2</title>
</head>
<body>
    <div class="card">
        <h1>Tugas 2</h1>
        <p>Nama Mapel: {{$mapel}}</p>
        <p>Nama Pamong:</p>
        <ul>
            @foreach ($namapamong as $nama)
                <li>{{$nama}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>