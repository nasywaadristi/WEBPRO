<?php 
 $databarang = [
    ["id" => 1, "namabarang" => "Buku", "kategori" => "Alat Tulis", "harga" => 20000]
 ];

//Create
if(isset($_POST['tambah'])){
    $id = count($databarang)+1;
    $namabarang = $_POST['namabarang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $databarang[] = ["id" => $id, "namabarang" => $namabarang, "kategori" => $kategori, "harga" => $harga];
}

//Delete
if(isset($_POST['delete'])){
    $index = $_POST['delete'];
    foreach($databarang as $a => $b)
    unset($databarang[$index]); //unset => untuk menghapus berdasarkan index
    $databarang = array_values($databarang); //array_values => untuk mengatur ulang index array
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale">
    <title>Jurnal 4</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="" method="POST">
        <label for="namabarang">Nama Barang :</label><br>
        <input type="text" id="namabarang" name="namabarang"> <br>

        <label for="kategori">Kategori Barang :</label><br>
        <input type="text" id="kategori" name="kategori"> <br>
        
        <label for="harga">Harga Barang  :</label><br>
        <input type="text" id="harga" name="harga"> <br>
        <!-- element html untuk submit form type submit -->
        <input type="submit" name="tambah" value="Tambah Barang">
    </form>
</body>
</html>

<?php

echo "<table border='1' cellspacing='0'>";
echo "<tr> <th>ID</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Aksi</th></tr>";
foreach($databarang as $key=> $dbr){
    echo"<tr>";
        echo"<td>{$dbr['id']}</td>";
        echo"<td>{$dbr['namabarang']}</td>";
        echo"<td>{$dbr['kategori']}</td>";
        echo"<td>{$dbr['harga']}</td>";
        echo"<td></td>";
        echo"</td>";
}echo "</table>";

?>
