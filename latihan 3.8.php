<?php
function hitungPangkat($angka, $pangkat) {
    return pow($angka, $pangkat);
}

// Contoh penggunaan fungsi
$angka =5 ;
$pangkat = 4;
$hasil = hitungPangkat($angka, $pangkat);

echo "Hasil $angka pangkat $pangkat adalah $hasil";
