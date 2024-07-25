<?php
include '../database/koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM registrasi";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>


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

        .table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .table th,
        .table td {
            border: none;
            padding: 10px 15px;
            text-align: left;
            vertical-align: middle;
        }

        .table thead th {
            background-color: #444;
            color: #fff;
            border-bottom: 1px solid #555;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table tbody tr:hover td {
            border-bottom: 1px solid #ddd;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 5px;
            align-items: center;
        }

        .btn-group {
            display: flex;
            gap: 5px;
        }

        .btn {
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .modal-content {
            border-radius: 0.5rem;
            padding: 1rem;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }

        .modal.show {
            display: block;
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
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
                        <a href="../index.php" class="nav-link text-white">
                            Pilihan Beasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="daftar.php" class="nav-link text-white">
                            Daftar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="hasil.php" class="nav-link text-white active">
                            Hasil
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4 mt-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="mb-0">Tampil Data Beasiswa</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No. HP</th>
                                        <th scope="col">Semester</th>
                                        <th scope="col">IPK terakhir</th>
                                        <th scope="col">Pilihan Beasiswa</th>
                                        <th scope="col">Berkas Syarat</th>
                                        <th scope="col">Status Ajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo htmlspecialchars($row['nim']); ?></td>
                                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['no_hp']); ?></td>
                                            <td><?php echo htmlspecialchars($row['semester']); ?></td>
                                            <td><?php echo htmlspecialchars($row['ipk']); ?></td>
                                            <td><?php echo htmlspecialchars($row['pilihan_beasiswa']); ?></td>
                                            <td>
                                                <a href="../asset/<?php echo htmlspecialchars($row['upload_berkas']); ?>" target="_blank" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye"></i> Lihat Berkas
                                                </a>
                                            </td>
                                            <td><?php echo htmlspecialchars($row['status_ajuan']); ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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