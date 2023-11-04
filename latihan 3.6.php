<!DOCTYPE html>
<html>
<head>
    <title>Data Negara</title>
</head>
<body>
    <h1>Data Negara</h1>
    <?php
    // Membuat array multidimensi untuk menyimpan data negara
    $negara = array(
        array("Negara" => "Indonesia", "Ibukota" => "D.KI Jakarta", "Kode Telepon" => "+62"),
        array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
        array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
        array("Negara" => "Brunel", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
        array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
        array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
        array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
        array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
    );

    // Mengurutkan array berdasarkan negara
    usort($negara, function($a, $b) {
        return $a['Negara'] <=> $b['Negara'];
    });

    // Membuat tabel untuk menampilkan data
    echo '<table border="1">';
    echo '<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>';
    foreach ($negara as $data) {
        echo '<tr>';
        echo '<td>' . $data['Negara'] . '</td>';
        echo '<td>' . $data['Ibukota'] . '</td>';
        echo '<td>' . $data['Kode Telepon'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>
