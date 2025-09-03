<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FAQ</title>
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
        .faq-item {
            margin-bottom: 1.5rem;
        }
        .question {
            font-weight: 700;
            margin-bottom: 0.3rem;
        }
        .answer {
            color: #555;
            margin-left: 1rem;
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
    <h1>FAQ</h1>

    <div class="faq-item">
        <div class="question">1. Apa tujuan web ini?</div>
        <div class="answer">Web ini dibuat sebagai tugas framework berbasis web pada pertemuan 2.</div>
    </div>

    <div class="faq-item">
        <div class="question">2. Sumber darimana karya fiksi tersebut?</div>
        <div class="answer">karya fiksi yang saya tampilkan pada web ini adalah karya fiksi official dari hoyoverse jadi saya hanya copy paste. Saya mengubah tanda " menajadi ' agar tidak ada kesalahan dalam kode.</div>
    </div>

    <div class="faq-item">
        <div class="question">3. Apakah bahasa yang anda gunakan di web ini?</div>
        <div class="answer">Saya menggunakan HTML dan CSS di file PHP. Hal ini saya lakukan agar tampilan web lebih enak untuk dilihat.</div>
    </div>
    <a href="{{ route('home') }}" class="btn">Kembali ke Beranda</a>
</body>
</html>