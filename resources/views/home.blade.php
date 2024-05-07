<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Halaman | </title>
    <link rel="icon" href="{{ asset('img/pplg.png') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap');
        body{
            background-image: url("{{ asset('img/bg-index.gif') }}");
        }
        h1 {
            font-family: 'Rubik', sans-serif;
        }
      </style>
</head>
<body>
    <div id="background">
        <div class="glassmorph-content">
            <div class="container-glassmorph">
                <h1>MEDIA ONLINE</h1>
                <h2>Sosial Media developer</h2>
                <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
                <h2>Benefit join di Media Online</h2>
                <ul>
                    <li>Mendapatkan motivasi dari sesama para developer</li>
                    <li>Sharing knowledge</li>
                    <li>Dibuat oleh calon web developer terbaik</li>
                </ul>
                <h2>Cara Bergabung ke Media online</h2>
                <ol>
                    <li>Mengunjungi website ini</li>
                    <li>Mendaftarkan di <a href="{{url ('form')}}">Form sign up</a></li>
                    <li>Selesai</li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>