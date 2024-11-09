<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pertandingan Sepak Bola - Liga Champions</title>
    
    <!-- Link untuk Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://via.placeholder.com/1600x900'); /* Ganti dengan gambar stadion */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        h1 {
            font-size: 32px;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .table-container {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.7);
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #003366; /* Warna biru UEFA */
            color: white;
        }

        td {
            background-color: #444;
        }

        .link-column a {
            color: #ffcc00;
            font-weight: bold;
            text-decoration: none;
            margin-bottom: 5px;
            display: block;
            transition: color 0.3s ease;
        }

        .link-column a:hover {
            color: #fff;
        }

        .btn {
            background-color: #006400;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            margin: 20px 0;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #ffcc00;
            color: #333;
            transform: translateY(-3px);
        }

        .btn-back {
            background-color: #333;
        }

        /* Responsif */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
            .btn {
                font-size: 14px;
                padding: 10px 20px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Jadwal Pertandingan Liga Champions</h1>

    <div class="table-container">
        <!-- Tabel Jadwal -->
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Pertandingan</th>
                <th>Waktu</th>
                <th>Link Nonton</th>
            </tr>
            <?php foreach ($jadwal as $match): ?>
            <tr>
                <td><?php echo $match['tanggal']; ?></td>
                <td><?php echo $match['tim1'] . " vs " . $match['tim2']; ?></td>
                <td><?php echo $match['waktu']; ?></td>
                <td class="link-column">
                    <a href="<?php echo $match['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i> Tonton di YouTube</a>
                    <a href="<?php echo $match['siaran_langsung']; ?>" target="_blank"><i class="fas fa-tv"></i> Siaran Langsung</a>
                    <a href="<?php echo $match['berita']; ?>" target="_blank"><i class="fas fa-newspaper"></i> Berita Terkait</a>
                    <a href="<?php echo $match['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i> Tonton di Facebook</a>
                    <a href="<?php echo $match['twitch']; ?>" target="_blank"><i class="fab fa-twitch"></i> Tonton di Twitch</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Tombol Kembali ke Halaman Sebelumnya -->
    <a href="javascript:history.back()" class="btn btn-back">Kembali ke Halaman Sebelumnya</a>
</div>

</body>
</html>

