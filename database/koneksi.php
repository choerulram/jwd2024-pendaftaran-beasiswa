<?php 
$koneksi = mysqli_connect("localhost","root","","beasiswa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
return mysqli_affected_rows($koneksi);

?>