<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Web Sepak Bola STMIK Time</title>

    <!-- Menambahkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style type="text/css">
        /* Warna pilihan untuk teks yang dipilih */
        ::selection { background-color: #006400; color: white; }
        ::-moz-selection { background-color: #006400; color: white; }

        /* Umum */
        body {
            background-color: #fafafa;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-image: url('https://cdn.pixabay.com/photo/2016/11/14/05/21/children-1822688_1280.jpg'); /* Ganti dengan gambar stadion */
            background-size: cover;
            background-position: center;
        }

        a {
            color: #008000;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            color: #ffcc00;
        }

        /* Header */
        h1 {
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.5);
            border-bottom: 3px solid #ffcc00;
            font-size: 32px;
            font-weight: bold;
            margin: 20px 0;
            padding: 20px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        /* Tombol dengan ikon */
        .header-buttons {
            display: flex;
            gap: 15px;
        }

        /* Button Styling */
        .btn {
            background-color: #006400;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Tombol Hover */
        .btn:hover {
            background-color: #ffcc00;
            color: #333;
            transform: translateY(-3px); /* Efek tombol naik */
        }

        /* Ikon di tombol */
        .btn i {
            margin-right: 8px;
        }

        /* Konten utama */
        #body {
            margin: 0 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
            font-size: 14px;
            border-top: 2px solid #ffcc00;
            margin-top: 40px;
        }

        footer p {
            font-size: 16px;
            margin: 0;
            line-height: 1.5;
            animation: fadeIn 1s ease-in-out;
        }

        /* Animasi Fade In untuk footer */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Responsif */
        @media (max-width: 768px) {
            #container {
                width: 90%;
            }

            .header-buttons {
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

<div id="container">
    <h1>
        Selamat Datang di Web Sepak Bola STMIK Time
        <div class="header-buttons">
            <a href="index.php/about" class="btn"><i class="fas fa-info-circle"></i>About</a>
            <a href="index.php" class="btn"><i class="fas fa-home"></i>Home</a>
            <a href="index.php/tokoh" class="btn"><i class="fas fa-users"></i>Tokoh</a>
            <a href="index.php/gallery" class="btn"><i class="fas fa-images"></i>Gallery</a>
            <a href="index.php/jadwal" class="btn"><i class="fas fa-calendar-check"></i>Lihat Jadwal</a>
            <a href="index.php/klasemen" class="btn"><i class="fas fa-trophy"></i>Klasemen</a>
        </div>
    </h1>

    <div id="body">
        <h2>Sejarah Sepak Bola Dunia</h2>
        <p>Sepak bola adalah olahraga yang paling populer di dunia. Meskipun asal usulnya dapat ditelusuri kembali ke berbagai permainan bola kuno yang dimainkan di banyak negara, sepak bola modern yang kita kenal sekarang dimulai di Inggris pada abad ke-19. Pada tahun 1863, Asosiasi Sepak Bola Inggris (The Football Association) didirikan, yang membuat aturan standar yang diikuti oleh banyak negara di dunia.</p>

        <p>Setelah itu, sepak bola menyebar ke seluruh dunia, dan pada tahun 1930, Piala Dunia FIFA pertama kali diadakan di Uruguay, menandai dimulainya kompetisi sepak bola internasional yang paling bergengsi.</p>

        <p>Sepak bola telah berkembang menjadi olahraga global, dengan lebih dari 200 negara yang berpartisipasi dalam kompetisi internasional. Piala Dunia FIFA adalah acara olahraga terbesar yang disaksikan oleh jutaan orang dari seluruh dunia setiap empat tahun sekali.</p>

        <h2>Sejarah Sepak Bola di Indonesia</h2>
        <p>Sepak bola pertama kali diperkenalkan di Indonesia oleh penjajah Belanda pada awal abad ke-20. Pada tahun 1930, sepak bola mulai dimainkan secara terorganisir, dan pada tahun 1931, Indonesia (dulu Hindia Belanda) mengadakan liga sepak bola pertamanya.</p>

        <p>Setelah Indonesia merdeka pada 1945, sepak bola menjadi olahraga yang sangat populer di kalangan masyarakat. Indonesia bergabung dengan Federasi Sepak Bola Internasional (FIFA) pada tahun 1950 dan menjadi bagian dari Konfederasi Sepak Bola Asia (AFC) pada tahun 1954.</p>

        <p>Beberapa prestasi terbesar Indonesia dalam sepak bola internasional termasuk penampilan mereka di Piala Asia dan Kualifikasi Piala Dunia. Tim Nasional Indonesia (Tim Garuda) terus berkembang dan berusaha mencapai prestasi terbaiknya di level internasional.</p>

        <p>Sepak bola di Indonesia juga sangat identik dengan atmosfer penuh semangat di liga domestik, seperti Liga 1, dan klub-klub besar seperti Persija Jakarta, Persib Bandung, dan Arema FC yang memiliki basis penggemar yang sangat besar.</p>

        <p>Sepak bola Indonesia terus berkembang dan banyak pemuda Indonesia yang berpotensi untuk bersaing di tingkat internasional.</p>
    </div>

    <footer>
        <p>&copy; 2024 Edward Samuel Nainggolan | All Rights Reserved</p>
        <p>Designed with ❤️ by Edward Samuel Nainggolan </p>
    </footer>
</div>

</body>
</html>
