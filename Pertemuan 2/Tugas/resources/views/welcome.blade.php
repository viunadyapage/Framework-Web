<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Archive of Decalcouluie</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        h2 {
            font-weight: normal;
            color: #555;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
            background-color:rgb(255, 0, 0);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }
        .btn:hover {
            background-color:rgb(255, 0, 0);
        }
    </style>
</head>
<body>
    <h1>Halo, Selamat Datang di Archive of Decalcouluie</h1>
    <h2>Silahkan eksplorasi web saya ╰⁠(⁠*⁠´⁠︶⁠`⁠*⁠)⁠╯</h2>

    <a href="{{ route('fiksi.index') }}" class="btn">Karya Fiksi</a>
    <a href="{{ route('about') }}" class="btn">Tentang Saya</a>
    <a href="{{ route('faq') }}" class="btn">FAQ</a>
</body>
</html>
