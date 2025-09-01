<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Daftar Karya Fiksi</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            padding: 2rem;
            max-width: 700px;
            margin: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: left;
            text-decoration: none;
            color: white;
        }
        .btn-1 { background-color: #5a3103ff; }
        .btn-2 { background-color: rgb(155, 40, 201); }
        .btn-3 { background-color: rgb(255, 0, 0); }
        .btn-4 { background-color:rgb(12, 218, 250); }

        .btn:hover {
            opacity: 0.9;
        }

        /* Tombol untuk kembali ke beranda */
        .btn-small {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
            background-color:rgba(18, 165, 18, 1);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <h1>Daftar Karya Fiksi kesukaan saya</h1>

    <a href="{{ route('fiksi.show', ['judul' => 'hsr-1']) }}" class="btn btn-1">Fiksi 1: My Professor Can't Possibly Be This Shy</a>
    <a href="{{ route('fiksi.show', ['judul' => 'genshin']) }}" class="btn btn-2">Fiksi 2: Yakshas: The Guardian Adepti</a>
    <a href="{{ route('fiksi.show', ['judul' => 'hsr-2']) }}" class="btn btn-3">Fiksi 3: On Pomegranate Juice</a>
    <a href="{{ route('fiksi.show', ['judul' => 'hsr-3']) }}" class="btn btn-4">Fiksi 4: Death of the Crow</a>

    <a href="{{ route('home') }}" class="btn-small">Kembali ke Beranda</a>
</body>
</html>