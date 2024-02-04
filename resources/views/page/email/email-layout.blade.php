<html>

<head>
    <title>SiKaMU-App</title>
    <style>
        .myButton {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <center>
        <hr style="background-color: black; height: 3px;">
        <h1>PERHATIAN!!!</h1>
        <hr style="background-color: black; height: 3px;">
        <h3>Telah terjadi {{ $data['title'] }}</h3>
    </center><br><br>

    <table class="mt-8">
        <tr>
            <td>Patokan Lokasi Kejadian</td>
            <td>:</td>
            <td>{{ $data['patokan'] }}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>{{ $data['catatan'] }}</td>
        </tr>
        <tr>
            <td>Pelapor</td>
            <td>:</td>
            <td>{{ $data['pelapor'] }}</td>
        </tr>
    </table><br><br><br><br><br>
    <center>
        <a href="{{ $data['lokasi'] }}" class="myButton">Lihat
            Lokasi Kejadian</a>
    </center>
</body>

</html>
