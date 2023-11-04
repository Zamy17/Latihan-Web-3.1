<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERUSAHAAN TEKNOLOGI</title>
</head>
<body>
<?php
// Membuat associative array dengan data perusahaan teknologi
$perusahaanteknologi = array(
    "Teknologi 1" => array(
        "Nama Perusahaan" => "Ruangguru",
        "Deskripsi" => "perusahaan teknologi terbesar di Indonesia yang berfokus pada layanan berbasis pendidikan.",
        "Kantor Pusat" => "Jl. Dr. Saharjo No.161, Manggarai Selatan, Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860 Indonesia",
        "Bidang Teknologi" => "Pendidikan Online",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/ruangguru.png"
    ),
    "Teknologi 2" => array(
        "Nama Perusahaan" => "XL Axiata",
        "Deskripsi" => "XL Axiata adalah perusahaan teknologi yang menyediakan
         layanan telekomunikasi dan jaringan internet.",
        "Kantor Pusat" => "XL Axiata Tower JL. H. R. Rasuna Said X5 Kav. 11-12 Kuningan Timur, Setiabudi, Jakarta Selatan 12950 Indonesia. ",
        "Bidang Teknologi" => "Telekomunikasi",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/XL Axita.png"
        
    ),
    "Teknologi 3" => array(
        "Nama Perusahaan" => "Telkom Indonesia",
        "Deskripsi" => "Telkom Indonesia adalah perusahaan teknologi yang menyediakan
         layanan telekomunikasi dan jaringan internet,Didirikan pada tahun 1856.",
        "Kantor Pusat" => "Menara Multimedia Jl. Kebon Sirih No.10-12 RT.11/RW.2, Gambir, Kota Jakarta Pusat, DKI Jakarta, 10110 Indonesia ",
        "Bidang Teknologi" => "Telekomunikasi",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/Telkom Indonesia.png"
    ),
    "Teknologi 4" => array(
        "Nama Perusahaan" => "Blibli",
        "Deskripsi" => "Blibli adalah perusahaan teknologi yang menyediakan platform 
        e-commerce untuk membeli dan menjual berbagai produk. Didirikan pada tahun 2011.",
        "Kantor Pusat" => "Gedung Sarana Jaya
        Jalan Budi Kemuliaan I No.1,
        RT.2/RW.3, Gambir, Kecamatan Gambir,
        Kota Jakarta Pusat, DKI Jakarta 10110
         Indonesia",
        "Bidang Teknologi" => "E-commerce",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/Blibli.jpg"
    ),
    "Teknologi 5" => array(
        "Nama Perusahaan" => "OVO",
        "Deskripsi" => "OVO adalah perusahaan teknologi yang menyediakan layanan
         dompet digital dan pembayaran online. Didirikan pada tahun 2017. ",
        "Kantor Pusat" => "Jalan R.A. Kartini Kaveling 8, Kel. Cilandak Barat,
        Kec. Cilandak, Jakarta Selatan 12430  Indonesia",
        "Bidang Teknologi" => "Dompet Digital Dan Layanan Pembayaran",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/ovo.png"
    ),
    "Teknologi 6" => array(
        "Nama Perusahaan" => " Bukalapak",
        "Deskripsi" => " Bukalapak adalah perusahaan teknologi yang menyediakan platform
         e-commerce untuk membeli dan menjual berbagai produk. Didirikan pada tahun 2010.",
        "Kantor Pusat" => "Metropolitan Tower. Jl. R.A. Kartini Kav. 14, RT 10/RW 4,. Cilandak Barat, Cilandak. Jakarta Selatan, 12430 Indonesia",
        "Bidang Teknologi" => "E-commerce",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/bukalapak.png"
    ),
    "Teknologi 7" => array(
        "Nama Perusahaan" => "Traveloka",
        "Deskripsi" => "Traveloka adalah perusahaan teknologi yang menyediakan platform 
        untuk memesan tiket pesawat, hotel, dan paket liburan. Didirikan pada tahun 2012.",
        "Kantor Pusat" => "MIDPOINT PLACE, Jl. Fachrudin No. 26 Tanah Abang Jakarta Pusat 10250 Indonesia",
        "Bidang Teknologi" => " Agen perjalanan online",
        "Logo" => "..//assets/img/Traveloka.png"
    ),
    "Teknologi 8" => array(
        "Nama Perusahaan" => "Gojek",
        "Deskripsi" => "Gojek adalah perusahaan teknologi yang menyediakan layanan 
        transportasi online dan pengiriman barang. Didirikan pada tahun 2010.",
        "Kantor Pusat" => "Pasaraya Blok M Gedung B Lt. 6
        Jalan Iskandarsyah II No.7, RW. 2, Melawai, Kebayoran Baru, RT.3/RW.1, Melawai, Kby. Baru
        Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160 Indonesia",
        "Bidang Teknologi" => "Layanan ride-hailing dan pengiriman",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/gojek.png"
    ),
    "Teknologi 9" => array(
        "Nama Perusahaan" => "Tokopedia ",
        "Deskripsi" => "Tokopedia adalah perusahaan teknologi yang menyediakan platform
         e-commerce untuk membeli dan menjual berbagai produk. Didirikan pada tahun 2009.",
        "Kantor Pusat" => "Jl. Prof.Dr. Satrio Kav 11, Prof. Dr. Satrio, Satrio, Jakarta Selatan Indonesia",
        "Bidang Teknologi" => "E-commerce",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/tokopedia.png"
    ),
    "Teknologi 10" => array(
        "Nama Perusahaan" => "DANA",
        "Deskripsi" => "DANA adalah perusahaan teknologi yang menyediakan
         layanan dompet digital dan pembayaran online. Didirikan pada tahun 2018.",
        "Kantor Pusat" => "Capital Place Lantai 18, Jl. Gatot Subroto RT.6/RW.1, Kuningan Barat, Mampang Prapatan, Jakarta Selatan , Indonesia",
        "Bidang Teknologi" => "Dompet digital dan layanan pembayaran",
        "Logo" => "../tugas web perusahaan teknologi/assets/img/dana.png"
    ),
);

// Mencetak tabel
?>

<h1 style="text-align: center;">perusahaan teknologi</h1>
<table border='1' cellpadding="3" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Deskripsi</th>
        <th>Kantor Pusat</th>
        <th>Bidang Teknologi</th>
        <th>Logo</th>
    </tr>

    <?php 
    $nomor = 1;
    foreach ($perusahaanteknologi as $Teknologi) {
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>" . $Teknologi["Nama Perusahaan"] . "</td>";
        echo "<td>" . $Teknologi["Deskripsi"] . "</td>";
        echo "<td>" . $Teknologi["Kantor Pusat"] . "</td>";
        echo "<td>" . $Teknologi["Bidang Teknologi"] . "</td>";
        echo "<td><img src='" . $Teknologi["Logo"] . "' alt='" . $Teknologi["Nama Perusahaan"] . "' width='100'></td>";
        echo "</tr>";
        $nomor++;
    };

    ?>
</table>
</body>
</html>
