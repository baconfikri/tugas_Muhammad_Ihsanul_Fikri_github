<?php 
include 'koneksi.php'; 

// === 1. Variabel dan Tipe Data ===
$nama_lengkap = "Muhammad Ihsanul Fikri";
$alamat = "Kota Sukabumi";
$lokasi_pendakian = "Tugu Puncak Gunung Pangrango";
$ketinggian = 3019;

// === 2. Array untuk Langkah Pendakian ===
$langkah_pendakian = [
    "Mendaftar SIMAKSI",
    "Memulai Pendakian dari Basecamp",
    "Melewati Pos-pos Pendakian",
    "Tiba di Kandang Badak",
    "Muncak ke Puncak Pangrango"
];

// === 3. Mengambil Data dari MySQL ===
$query_perlengkapan = mysqli_query($conn, "SELECT * FROM perlengkapan");
?> <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web PHP - Pendakian Fikri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="#">Fikri<span>ihsanss</span></a>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Dokumentasi</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container-content">
    <section class="hero">
        <h1>Tugas Praktikum Web (PHP Version)</h1>
    </section>

    <section class="profile-section">
        <div class="profile-text">
            <h2>Profil Pendaki</h2>
            <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            <a href="https://booking.gedepangrango.org" target="_blank" class="btn">Informasi Taman Nasional</a>
        </div>
        <div class="profile-img">
            <img src="foto.jpeg" alt="Foto Fikri di Puncak">
        </div>
    </section>

    <section>
        <h2>Keterangan Pendakian</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Pendaki</td>
                    <td><?php echo $nama_lengkap; ?></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td><?php echo $lokasi_pendakian; ?></td>
                </tr>
                <tr>
                    <td>Ketinggian</td>
                    <td><?php echo $ketinggian; ?> MDPL</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="list-section">
        <div class="card">
            <h2>Perlengkapan (MySQL)</h2>
            <ul>
                <?php while($row = mysqli_fetch_array($query_perlengkapan)) { 
                    echo "<li>" . $row['nama_barang'] . "</li>";
                } ?>
            </ul>
        </div>
        </section>

        <section>
            <div class="card">
                <h2>Langkah Pendakian</h2>
                <ol>
                    <?php foreach ($langkah_pendakian as $langkah) { ?>
                        <li><?php echo $langkah; ?></li>
                <?php } ?>
            </ol>
        </div>
    </section>
</main>

<footer class="footer">
    <p>&copy; 2026 Tugas Praktikum Web - <?php echo $nama_lengkap; ?></p>
</footer>

</body>
</html>