<?php

/***
Perbedaan type variable:
- String menggunakan double quote atau single quote ("x" atau 'x'), kalo ada angka seperti ini: "1" atau '1', itu tetap dianggap string.
- Integer adalah angka yg ga memakai quote. Jadi kayak angka biasa 0,1,2,3..dst
- double atau float atau decimal, ya kayak namanya. Kayak integer tapi bisa pake koma dibelakang angka, contoh: 3.14 atau 109.8916391
***/

$str = "Ini adalah string atau str";
echo $str;
echo "<br>";
// type
echo "type: ";
echo gettype($str);

// ini adalah untuk enter ke bawah, yang diambil dari elemen HTML (Web Supported)
echo "<br>";
echo "<br>";
echo "ini adalah untuk enter ke bawah, yang diambil dari elemen HTML (Web Supported)";
echo "<br>";
echo "<br>";

$int = 2022;
echo $int;
echo "<br>";
// type
echo "type: ";
echo gettype($int);

echo "<br>";
echo "<br>";

// pertambahan
echo "Ini adalah pertambahan yang menggunakan variable, variable PHP selalu diawali pake simbol dollar";
echo "<br>";
$duit_di_dompet = 10000;
$nemu_duit_di_jalan = 50000;
$gw_kantongin_deh = $duit_di_dompet + $nemu_duit_di_jalan;
echo $gw_kantongin_deh;
echo "<br>";
echo "<br>";

// pengurangan
echo "Ini adalah pengurangan yang menggunakan variable, variable PHP selalu diawali pake simbol dollar";
echo "<br>";
$total_abis_nemu_duit_di_jalan = 60000;
$bayar_hutang_ke_warung = 45000;
$sisa_duit_di_dompet = $total_abis_nemu_duit_di_jalan - $bayar_hutang_ke_warung;
echo $sisa_duit_di_dompet;

echo "<br>";

$gw_jajanin_teh_pucuk = 3500;
$sisaan_dikantong_gw = $sisa_duit_di_dompet - $gw_jajanin_teh_pucuk;
echo $sisaan_dikantong_gw;
echo "<br>";
echo "<br>";

?>