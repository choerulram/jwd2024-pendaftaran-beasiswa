<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header,
        .nav-link,
        #sidebar {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        .nav-link {
            transition: color 0.2s ease;
            color: #fff;
        }

        .nav-link:hover {
            color: #fff;
            background-color: #ff9900;
            border-radius: 5px;
        }

        .nav-link.active {
            color: #fff;
            background-color: #333;
            border-radius: 5px;
        }

        .display-5 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        #sidebar {
            min-height: 100vh;
            position: sticky;
            top: 0;
            transition: transform 0.3s ease;
        }

        #sidebar.collapsed {
            transform: translateX(-100%);
        }

        .btn-start {
            margin-top: 20px;
        }

        .card-header {
            background-color: #444;
            color: #fff;
            border-bottom: 0;
            border-radius: 0.25rem;
        }

        .card-body {
            background-color: #f8f9fa;
            color: #333;
            padding: 2rem;
            border-radius: 0.25rem;
        }

        .card-body h2 {
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }

        .card-body ul {
            list-style-type: square;
            padding-left: 1.5rem;
        }

        .card-body ul li {
            margin-bottom: 0.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            padding: 0.75rem 1.5rem;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- bagian header -->
    <header class="bg-dark text-white py-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-2">Pendaftaran Beasiswa</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white p-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white active">
                            Pilihan Beasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="view/daftar.php" class="nav-link text-white">
                            Daftar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="view/hasil.php" class="nav-link text-white">
                            Hasil
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4 mt-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="mb-0">Pilihan Beasiswa</h2>
                    </div>
                    <div class="card-body">
                        <p>Beasiswa dapat dibagi menjadi dua kategori utama:</p>
                        <ul>
                            <li><strong>Beasiswa Akademik:</strong> Diberikan kepada mahasiswa dengan prestasi akademik yang baik. Contohnya termasuk:
                                <ul>
                                    <li><strong>Beasiswa KIP-K:</strong> Beasiswa untuk membantu mahasiswa kurang mampu dengan prestasi akademik baik.</li>
                                    <li><strong>Beasiswa Prestasi Akademik:</strong> Diberikan untuk mahasiswa dengan IPK tinggi dan prestasi akademik yang luar biasa.</li>
                                    <li><strong>Beasiswa Penuh Universitas:</strong> Beasiswa yang mencakup biaya kuliah penuh untuk mahasiswa dengan prestasi akademik terbaik.</li>
                                </ul>
                            </li>
                            <li><strong>Beasiswa Non-Akademik:</strong> Diberikan berdasarkan keterlibatan dalam kegiatan ekstrakurikuler atau kontribusi sosial. Contohnya termasuk:
                                <ul>
                                    <li><strong>Beasiswa Pertamina:</strong> Beasiswa untuk mahasiswa yang aktif dalam kegiatan organisasi dan sosial.</li>
                                    <li><strong>Beasiswa Mandiri:</strong> Beasiswa yang diberikan berdasarkan kontribusi di bidang sosial dan masyarakat.</li>
                                    <li><strong>Beasiswa Pemberdayaan Masyarakat:</strong> Ditujukan untuk mahasiswa yang terlibat dalam proyek pengembangan masyarakat dan kegiatan sosial.</li>
                                </ul>
                            </li>
                        </ul>
                        <a href="view/daftar.php" class="btn btn-primary btn-start">Mulai Pendaftaran</a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-white text-center py-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="mb-2">Copyright © JWD 2024 | Achmad Choerul Ramdhani</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
