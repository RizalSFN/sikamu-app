<html>

<head>
    <title>SiKaMU-App</title>
    <style>
        .myButton {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #3490dc;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <center>
        <br>
        <h2>Hai!!!</h2>
        <h3>klik tombol dibawah untuk melakukan isi ulang kata sandi</h3>
        <br><br><br>

        <a href="{{ route('forgot-password.create', ['token_forgot' => $data]) }}" class="myButton">Reset
            Password</a>
    </center>
    <br><br><br><br><br>
</body>

</html>
