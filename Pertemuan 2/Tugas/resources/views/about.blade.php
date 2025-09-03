<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Tentang Saya</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            padding: 2rem;
        }
        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        h1 {
            margin-bottom: 0.5rem;
        }
        p {
            margin-bottom: 1rem;
            color: #555;
        }
        .social-links a {
            margin: 0 0.5rem;
            text-decoration: none;
            font-weight: 600;
            color: #007bff;
        }
        .social-links a:hover {
            text-decoration: underline;
        }
        .btn {
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
    <img src="{{ asset('images/fotoprofil.jpg') }}" alt="Foto Profil" />
    <h1>Halo, saya Nadya</h1>
    <p>Web ini untuk tugas framework berbasis web.</p>

    <div class="social-links">
        <a href="https://www.linkedin.com/in/nadya-tirta" target="_blank">LinkedIn</a> |
        <a href="https://instagram.com/decalcouluie" target="_blank">Instagram</a> |
        <a href="https://x.com/viunadyapage" target="_blank">X</a> |
        <a href="https://t.me/viunadyapage" target="_blank">Telegram</a> |
        <a href="https://tiktok.com/@viunadyapage" target="_blank">TikTok</a> |
    </div>
    <a href="{{ route('home') }}" class="btn">Kembali ke Beranda</a>
</body>
</html>