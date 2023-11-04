<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>

<h2>Daftar Negara ASEAN dan Ibukotanya:</h2>
<ul>
    <?php
    $aseanArray = [
        "Indonesia" => "D.K.I. Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
    ];

    foreach ($aseanArray as $country => $capital) {
        echo "<li>$country : $capital</li>";
    }
    ?>
</ul>

</body>
</html>
