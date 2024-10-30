<?php

$buku = [
    ["judul" => "Bersek",
    "Penulis" => "Miura Kentaro"
    ],
    ["judul" => "Oswald",
     "Penulis" => "Walt Disney"
    ],
];

//Tampil data
 function tampil_data ($buku) {
    echo "<table border='1' cellspacing='0'>";
    echo "<tr> <th>judul</th><th>Penulis</th></tr>";;
    foreach($buku as $bk){
        echo"<tr>";
            echo"<td>{$bk['judul']}</td>";
            echo"<td>{$bk['Penulis']}</td>";
            echo"</td>";
    }echo "</table>";
}

echo"Menampilkan data awal ";
echo tampil_data($buku) . "<br>";

echo"Menambah Buku Baru ";
$buku[] = ['judul' =>'One Piece', "Penulis" => 'Eiichiro Oda'];
tampil_data($buku) ;
echo "<br>" ;

echo"Memperbarui Buku ";
$buku[2] =  ['judul' =>'Naruto', "Penulis" => 'Massahi Kishimoto'];
tampil_data($buku) . "<br>";

echo"Menghapus Buku ";
unset($buku[1]);
$buku = array_values($buku); //ngembaliin nilai dibawah nya buat msk keatas
tampil_data($buku);
echo "<br>";

echo"Mencari Buku ". '<br>';
// // echo strpos($buku, "Naruto");
// $a = array_column($buku, "Naruto");
// // tampil_data($a);
function mencari($buku, $judul){
    foreach ($buku as $book){
        if($book['judul'] == $judul){
            return $book;
        }
    }
    return null;
}

$produkketemu = mencari($buku, "Naruto");
if ($produkketemu) {
    echo "<table border='1' cellspacing='0'>";
     echo "<tr> <th>judul</th>";
    echo"<tr>";
    echo"<td>{$produkketemu['judul']}</td>";
    echo "</table>";
}
?>
















<!-- 
echo <table> 
    <tr>
        <td>Judul</td>
        <td>Penulis</td>
    </tr>
    <tr>
        <td>Judul</td>
        <td>Penulis</td>
    </tr> 
</table> -->