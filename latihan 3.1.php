<?php
function ganti_style($tulisan, $kelas) {
    return "<span class='$kelas' style='font-size: 28px; font-family: Arial; color: #1A0547; font-style: italic; font-weight: bolder;'>$tulisan</span>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>