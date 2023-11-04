<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>

<h2>Daftar Negara ASEAN awal:</h2>
<ul>
    <?php
    $aseanArray = [
        "Indonesia",
        "Singapura",
        "Malaysia",
        "Brunei",
        "Thailand"
    ];

    foreach ($aseanArray as $country) {
        echo "<li>$country</li>";
    }
    ?>
</ul>

<h2>Daftar Negara ASEAN baru:</h2>
<ul>
    <?php
    // Tambahkan 3 negara baru ke dalam array
    $aseanArray[] = "Laos";
    $aseanArray[] = "Filipina";
    $aseanArray[] = "Myanmar";

    foreach ($aseanArray as $country) {
        if ($country == "Brunel") {
            echo "<li>• $country</li>";
        } else {
            echo "<li>$country</li>";
        }
    }
    ?>
</ul>

</body>
</html>
