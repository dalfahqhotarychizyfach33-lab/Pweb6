<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 1px solid #888;
        }
        td, th {
            border: 1px solid #888;
            padding: 4px 8px;
            text-align: left;
            font-weight: normal;
        }
        .header-hijau {
            background-color: #00ff00;
        }
        .ganjil-kuning {
            background-color: #ffff00;
        }
        .genap-biru {
            background-color: #00ffff;
        }
    </style>
</head>
<body>

    <h3>1) Bilangan Genap dari 1 sampai 10:</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>

    <h3>2) Tabel Perkalian Matriks:</h3>
    <table>
        <tr>
            <td>bilangan</td>
            <?php
            for ($kolom = 1; $kolom <= 10; $kolom++) {
                echo "<td class='header-hijau'>$kolom</td>";
            }
            ?>
        </tr>

        <?php
        for ($baris = 1; $baris <= 10; $baris++) {
            echo "<tr>";
            // Kolom pertama (header samping berwarna hijau)
            echo "<td class='header-hijau'>$baris</td>";

            // Isi perkalian matriks
            for ($kolom = 1; $kolom <= 10; $kolom++) {
                $hasil = $baris * $kolom;
                
                // Cek ganjil (kuning) atau genap (biru cyan)
                $warna = ($hasil % 2 != 0) ? "ganjil-kuning" : "genap-biru";
                
                echo "<td class='$warna'>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>