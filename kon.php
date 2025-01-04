<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengadilan Tinggi Agama Banjarmasin</title>

    <!-- Menyertakan CSS di dalam head untuk desain -->
    <style>
        /* Reset default margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body dan font dasar */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        header {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            width: 120px;
            height: auto;
        }

        header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        /* Navbar */
        nav {
            background-color: #00509E;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            text-transform: uppercase;
            padding: 5px 0;
            display: block;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #FFD700;
        }

        /* Konten utama */
        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            color: #003366;
        }

        .welcome p {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Berita dan Layanan */
        .news, .services {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .news li, .services li {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .news li:hover, .services li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .news h4, .services a {
            font-size: 18px;
            font-weight: bold;
            color: #003366;
            text-decoration: none;
            margin-bottom: 10px;
            display: block;
            transition: color 0.3s;
        }

        .news h4:hover, .services a:hover {
            color: #FFD700;
        }

        /* Footer */
        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 14px;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            header h1 {
                font-size: 20px;
            }

            nav ul li a {
                font-size: 14px;
            }

            .news, .services {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo-pta-banjarmasin.png" alt="Logo PTA Banjarmasin">
        </div>
        <div class="header-right">
            <h1>Pengadilan Tinggi Agama Banjarmasin</h1>
        </div>
    </header>

    <!-- Menu Navigasi -->
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <!-- Konten Utama -->
    <main>
        <section class="welcome">
            <h2 class="section-title">Selamat datang di Pengadilan Tinggi Agama Banjarmasin</h2>
            <p>Portal resmi untuk informasi dan layanan terkait perkara agama di wilayah Banjarmasin.</p>
        </section>

        <!-- Berita Terkini -->
        <section class="news">
            <h3 class="section-title">Berita Terbaru</h3>
            <ul>
                <li>
                    <h4><a href="#">Berita 1</a></h4>
                    <p>Deskripsi singkat mengenai berita pertama...</p>
                </li>
                <li>
                    <h4><a href="#">Berita 2</a></h4>
                    <p>Deskripsi singkat mengenai berita kedua...</p>
                </li>
                <li>
                    <h4><a href="#">Berita 3</a></h4>
                    <p>Deskripsi singkat mengenai berita ketiga...</p>
                </li>
            </ul>
        </section>

        <!-- Layanan Pengadilan -->
        <section class="services">
            <h3 class="section-title">Layanan Kami</h3>
            <ul>
                <li><a href="#">Layanan 1</a></li>
                <li><a href="#">Layanan 2</a></li>
                <li><a href="#">Layanan 3</a></li>
                <li><a href="#">Layanan 4</a></li>
            </ul>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Pengadilan Tinggi Agama Banjarmasin. All Rights Reserved.</p>
        <p>Jl. XXX No. YYY, Banjarmasin, Kalimantan Selatan</p>
    </footer>

</body>
</html>
