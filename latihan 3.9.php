<?php
function hitungFaktorial($n) {
    if ($n === 0) {
        return 1; // Faktorial dari 0 adalah 1
    } elseif ($n < 0) {
        return "Bilangan negatif tidak memiliki faktorial";
    } else {
        $faktorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $faktorial *= $i;
        }
        return $faktorial;
    }
}

// Contoh penggunaan fungsi
$bilangan = 5;
$hasil = hitungFaktorial($bilangan);

if (is_numeric($hasil)) {
    echo "Faktorial dari $bilangan adalah $hasil";
} else {
    echo $hasil;
}
?>
