<?php
$colors = array("hijau", "kuning", "kelabu", "merah muda"); 
$kalimat = "Balonku ada lima.\nRupa-rupa warna-nnya\n";
foreach ($colors as $color) {
    $kalimat .= $color . ', ';
}
$kalimat .= "dan biru Meletus balon hijau DOR!!! Hatiku sangat kacau..";


$kalimat = str_replace("biru", $colors[2], $kalimat);


$kalimat = str_replace("huruf dengan tanda kuning", $colors[1], $kalimat);

echo $kalimat;
?>