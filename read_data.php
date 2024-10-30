<?php
//file manampilkan data
//mengambil data dari file koneksi.php
require_once("koneksi.php");

//pastikan data di tabel matakuliah terisi. diisi seacra manual saja
// eksekusi query
$sql = "SELECT * FROM matakuliah";
$result = mysqli_query($conn, $sql);

// menampilkan hasil query ke dalam browser
while($data = mysqli_fetch_assoc($result)) {
    echo $data['namamatakuliah']. "-".$data["kodematakuliah"]."-".$data['sks'];
    echo "<br>";
}

echo "<a href='form_input.php'>Tambah data</a>";