<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kependudukan</title>
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

        .btn-group {
            display: flex;
            gap: 5px;
        }

        .btn {
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            color: #fff;
        }

        .custom-btn-success:hover {
            background-color: #28a745;
        }

        .custom-btn-primary:hover {
            background-color: #0056b3;
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
                        <a href="daftar.php" class="nav-link text-white active">
                            Daftar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="hasil.php" class="nav-link text-white">
                            Hasil
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4 mt-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="mb-0">Registrasi Beasiswa</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses_daftar.php" method="POST" enctype="multipart/form-data" name="formBeasiswa">
                            <div class="mb-3">
                                <label for="nim" class="form-label fw-bold">NIM:</label>
                                <select id="nim" name="nim" class="form-select" required onchange="ipkMhs()">
                                    <option selected disabled>--Pilih NIM Anda--</option>
                                    <option value="220302049">220302049</option>
                                    <option value="220102050">220102050</option>
                                    <option value="220202051">220202051</option>
                                    <option value="220202052">220202052</option>
                                    <option value="220302053">220302053</option>
                                    <option value="220302054">220302054</option>
                                    <option value="220302055">220302055</option>
                                    <option value="220102056">220102056</option>
                                    <option value="220102057">220102057</option>
                                    <option value="220202058">220202058</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Masukkan Nama:</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda..." autocomplete="off" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Masukkan Email:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" autocomplete="off" required onchange="validEmail()">
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label fw-bold">No. HP:</label>
                                <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="081213......" autocomplete="off" required onchange="validNoHp()">
                            </div>

                            <div class="mb-3">
                                <label for="semester" class="form-label fw-bold">Semester:</label>
                                <select id="semester" name="semester" class="form-select" required onchange="tingkatKekayaan()">
                                    <option selected disabled>--Pilih Semester--</option>
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                    <option value="Semester 3">Semester 3</option>
                                    <option value="Semester 4">Semester 4</option>
                                    <option value="Semester 5">Semester 5</option>
                                    <option value="Semester 6">Semester 6</option>
                                    <option value="Semester 7">Semester 7</option>
                                    <option value="Semester 8">Semester 8</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="ipk" class="form-label fw-bold">IPK terakhir:</label>
                                <input type="number" id="ipk" name="ipk" class="form-control" placeholder="IPK terakhir Anda" autocomplete="off" required readonly>
                            </div>

                            <div class="mb-3">
                                <label for="pilihan_beasiswa" class="form-label fw-bold">Pilihan Beasiswa:</label>
                                <select id="pilihan_beasiswa" name="pilihan_beasiswa" class="form-select" required>
                                    <option selected disabled>--Pilih Beasiswa--</option>
                                    <option value="Beasiswa KIP-K">Beasiswa KIP-K</option>
                                    <option value="Beasiswa Prestasi Akademik">Beasiswa Prestasi Akademik</option>
                                    <option value="Beasiswa Penuh Universitas">Beasiswa Penuh Universitas</option>
                                    <option value="Beasiswa Pertamina">Beasiswa Pertamina</option>
                                    <option value="Beasiswa Mandiri">Beasiswa Mandiri</option>
                                    <option value="Beasiswa Pemberdayaan Masyarakat">Beasiswa Pemberdayaan Masyarakat</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="upload_berkas" class="form-label fw-bold">Upload Berkas Syarat:</label>
                                <input type="file" id="upload_berkas" name="upload_berkas" class="form-control" accept=".pdf,.jpg,.zip" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-success">Daftar</button>
                                <button type="button" class="btn btn-primary me-2" onclick="window.location.href='../index.php'">Batal</button>
                            </div>
                        </form>
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

    <script type="text/javascript">
        // method untuk pengecekan email apakah inputan menggunakan "@" atau tidak
        function validEmail() {
            var surel = document.formBeasiswa.email.value;

            if (surel.includes('@') == false) {
                window.alert("Email tidak valid.");
            }
        }

        // method untuk pengecekan banyaknya digit no_hp
        function validNoHp() {
            var nmr = document.formBeasiswa.no_hp.value;

            if (nmr.length <= 10 || nmr.length >= 13) {
                window.alert("Nomor HP tidak valid. Harus dimulai dengan 08 dan panjang 10-13 digit.");
            }
        }

        // method untuk menentukan ipk mahasiswa
        function ipkMhs() {
            // ambil nilai di formBeasiswa yg memiliki id status_kepemilikan_rumah
            var selectElement = document.getElementById("nim");
            var ipkInput = document.getElementById("ipk");
            var pilihanBeasiswa = document.getElementById("pilihan_beasiswa");
            var uploadBerkas = document.getElementById("upload_berkas");
            var submitButton = document.querySelector("button[type='submit']");

            // menentukan ipk berdasarkan nim
            if (selectElement.value === "220302049") {
                ipkInput.value = "2.3";
            } else if (selectElement.value === "220102050") {
                ipkInput.value = "3.2";
            } else if (selectElement.value === "220202051") {
                ipkInput.value = "3.5";
            } else if (selectElement.value === "220202052") {
                ipkInput.value = "3.8";
            } else if (selectElement.value === "220302053") {
                ipkInput.value = "3.1";
            } else if (selectElement.value === "220302054") {
                ipkInput.value = "2.7";
            } else if (selectElement.value === "220302055") {
                ipkInput.value = "2.9";
            } else if (selectElement.value === "220102056") {
                ipkInput.value = "3.6";
            } else if (selectElement.value === "220102057") {
                ipkInput.value = "3.3";
            } else if (selectElement.value === "220202058") {
                ipkInput.value = "3.4";
            }

            // disable elemen ketika ipk di bawah 3.0
            if (parseFloat(ipkInput.value) < 3.0) {
                pilihanBeasiswa.disabled = true;
                uploadBerkas.disabled = true;
                submitButton.disabled = true;
            } else {
                pilihanBeasiswa.disabled = false;
                uploadBerkas.disabled = false;
                submitButton.disabled = false;
                // atur kursor jika ipk di atas 3.0
                pilihanBeasiswa.focus();
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZcfRo7lnGg6IVX7MwB0YZhYCr3wCQr4tfl4QFwAfNd4K0tdxHwzQm/Cu8nE3MKID" crossorigin="anonymous"></script>
</body>

</html>