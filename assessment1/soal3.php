<?php 

$timA = ["Andre" => 1,
"Berli" => 2, 
"Charlie" => 3,
"Desmond" => 4,
"Erina" => 5 ];

$timB = ["Farah" => 1, 
"Gerry" => 2,
"Hesti" => 3,
"Indra" => 4,
"Jordan" => 5];

function ceknamatimA($petarung, $timA) {
    foreach ($timA as $nama => $angka) {
        if($petarung == $angka){
            return $nama;
         }
    }
    return FALSE;
}

function ceknamatimB($petarung, $timB) {
    foreach ($timB as $nama => $angka) {
        if($petarung == $angka){
            return $nama;
         }
    }
    return FALSE;
}


// $powertimA = ["Andre" => 80,
// "Berli" => 75, 
// "Charlie" => 67,
// "Desmond" => 88,
// "Erina" => 95 ];



// $powertimB = ["Farah" => 75, 
// "Gerry" => 89,
// "Hesti" => 76,
// "Indra" => 61,
// "Jordan" => 96];

$petarung = $_GET['angka'];
$cekpetarungA = ceknamatimA($nama);
$cekpetarungB = ceknamatimA($nama);

if($cepetarungA == TRUE and $cekpetarungB == TRUE){
    echo $nama . "diadu dengan" . $nama;
}

// foreach($timA as $nama => $angka){
//     if($petarung == $angka);
//         echo $nama;
// }

    
?>



