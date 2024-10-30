<?php

$daftarbuah = ['apel' => 10000,
'pisang' => 5000,
'mangga' => 15000];

function cekketersediaanbuah($inputbuah, $daftarbuah) {
    foreach ($daftarbuah as $buah => $harga) {
        if($inputbuah == $buah){
            return TRUE;
         }
    }
    return FALSE;
}

$inputbuah = readline('Masukkan buah yang ingin dibeli: ');
$cekinputbuah = cekketersediaanbuah($inputbuah, $daftarbuah);
// $jumlah = readline('Masukkan jumlah buah yang ingin dibeli: ');

if($cekinputbuah == TRUE){
    $jumlah = readline('Masukkan jumlah buah yang ingin dibeli: ');
    $harga = $daftarbuah[$inputbuah];
    $diskon = $harga *0.15;
    $hitung = $jumlah * $harga - $diskon;
    echo 'Harga buah yang anda pilih adalah'.' '. $hitung;
} else {
    echo "Maaf buah yang anda input tidak tersedia";
}




?>