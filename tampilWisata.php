<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Ambil data dari file getWisata.php
$send = curl("http://localhost/PraktikumRekayasaWEB2/getWisata.php");

// Decode JSON
$data = json_decode($send, true);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<p>Hasil decode data JSON di atas ditampilkan ke dalam bentuk HTML Tabel seperti berikut:</p>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>

    <?php
    if (!empty($data)) {
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>".$row['kota']."</td>";
            echo "<td>".$row['landmark']."</td>";
            echo "<td>".$row['tarif']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Data tidak ditemukan</td></tr>";
    }
    ?>
</table>

</body>
</html>
