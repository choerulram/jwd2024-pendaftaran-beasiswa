<?php
// koneksi database
include '../database/koneksi.php';

// menangkap data yang dikirim dari form dan membersihkan input
$nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$semester = mysqli_real_escape_string($koneksi, $_POST['semester']);
$ipk = mysqli_real_escape_string($koneksi, $_POST['ipk']);
$pilihan_beasiswa = mysqli_real_escape_string($koneksi, $_POST['pilihan_beasiswa']);
$upload_berkas = mysqli_real_escape_string($koneksi, $_FILES['upload_berkas']['name']);
$status_ajuan = 'belum diverifikasi';

// Simpan file upload jika diperlukan
$target_dir = "../asset/";
$target_file = $target_dir . basename($_FILES["upload_berkas"]["name"]);
if (move_uploaded_file($_FILES["upload_berkas"]["tmp_name"], $target_file)) {
    // menginput data ke database
    $query = "INSERT INTO registrasi (id, nim, nama, email, no_hp, semester, ipk, pilihan_beasiswa, upload_berkas) 
    VALUES (NULL, '$nim', '$nama', '$email', '$no_hp', '$semester', '$ipk', '$pilihan_beasiswa', '$upload_berkas')";

    if (mysqli_query($koneksi, $query)) {
        echo "Pendaftaran berhasil!";
        header("Location: hasil.php");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
} else {
    echo "Terjadi kesalahan dalam upload file.";
}

mysqli_close($koneksi);
?>
