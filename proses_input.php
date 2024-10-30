<?php

require_once("koneksi.php");

$nama_mata_kuliah = $_POST['nama_mata_kuliah'];
$kode_mata_kuliah = $_POST['kode_mata_kuliah'];
$sks = $_POST['sks'];

$sql = "INSERT INTO matakuliah(namamatakuliah, kodematakuliah, sks)
        VALUES('$nama_mata_kuliah','$kode_mata_kuliah', $sks)";

//untuk debugging query
// echo $sql;    
//(hasil dari debug diatas akan tampil di web browser dan salin ke localhost/phpmyadmin untuk cek kesalahan syntax query)

// untuk memasukkan input data baru, namun melihat hasilya harus manual buka file "read_data.php" secara manual
// mysqli_query($conn, $sql);

//untuk memasukkan input data baru, dan langsung menampilkan data yg baru dimasukkan pada file "read_data.php"
if(mysqli_query($conn, $sql)) {
    header("Location: read_data.php");  //untuk merifer langsung menampilkan pada file "read_data.php"
}
else{
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}