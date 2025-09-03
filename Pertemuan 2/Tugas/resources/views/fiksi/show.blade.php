<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ ucwords(str_replace('-', ' ', $judul)) }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            max-width: 700px;
            margin: 2rem auto;
            padding: 1rem;
            height: 90vh;
            display: flex;
            flex-direction: column;
        }
        h1 {
            margin-bottom: 0.2rem;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: normal;
            color: #666;
        }
        .btn-back {
            align-self: flex-start;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }
        .btn-back:hover {
            opacity: 0.9;
        }
        .content {
            flex-grow: 1;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 5px;
            white-space: pre-wrap;
            line-height: 1.5;
            color: #333;
        }
    </style>
</head>
<body>
    <a href="{{ route('fiksi.index') }}" class="btn-back">← Kembali ke Daftar Fiksi</a>

    <h1>{{ ucwords(str_replace('-', ' ', $judul)) }}</h1>
    <h2>{{ $subjudul ?? '' }}</h2>

    <div class="content">
        {{ $isi ?? 'Belum ada isi untuk karya ini.' }}
    </div>
</body>
</html>