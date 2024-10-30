<?php

// cara ke-1
echo 'Cara ke-1' . '<br>';
$a = 5;
$b = 10;
$c = 20;

$ratarata = ($a+$b+$c)/3;
$penjumlahan = $a+$b+$c;

echo '[1] Hasil rata-rata dari ketiga variabel yaitu'. ' '.  $ratarata. "<br>";
echo '[2] Hasil penjumlahan dari ketiga variabel yaitu'. ' '. $penjumlahan . "<br>";
echo '[3] Hasil penjumlahan dan rata-rata dari ketiga variabel yaitu'. ' '. $penjumlahan . ' dan '. $ratarata. "<br>";

// cara ke-2
echo '<br>' . '<br>';
echo 'Cara ke-2';
echo '<br>';

$angka1 = 3;
$angka2 = 4;
$angka3 = 6;

$PILIHAN = 5;
$RATARATA = ($a+$b+$c)/3;
$PENJUMLAHAN = $a+$b+$c;
$PERKALIAN = $angka1 * $angka2 * $angka3;

if($PILIHAN == 1) {
    echo 'Hasil penjumlahan dari angka tersebut yaitu'. ' '. $PENJUMLAHAN;
} elseif($PILIHAN == 2) {
    echo 'Hasil rata-rata dari angka tersebut yaitu'. ' '. $RATARATA;
} elseif($PILIHAN == 3) {
    echo 'Hasil rata-rata adalah'. $RATARATA . ' dan '. $PENJUMLAHAN;
} elseif($PILIHAN == 4) {
    echo 'Hasil perkalian adalah'. $PERKALIAN;
} elseif($PILIHAN == 5) {
    echo 'Hasil penjumlahan, rata-rata, dan perkalian adalah '. $PENJUMLAHAN. ' '. $RATARATA. ' '.$PERKALIAN;
}

?>