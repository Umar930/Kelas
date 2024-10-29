
<?php
$sekolah = ["SDN Sidodadi", "SMPN 2 Sidoarjo", "SMKN 2 BUDURAN"];
$sekolahs = ["TK" => "Tk Alkautsar", "SD" => "SDN Sidodadi", "SMP" => "SMPN 2 Sidoarjo", "SMK" => "SMKN 2 BUDURAN", "PT" => "UNIVERSITAS NEGERI SURABAYA"];

$skills = ["C++" => "EXPERT", "HTML" => "NEWBIE", "CSS" => "INTERMEDIATE", "PHP" => "INTERMEDIATE", "JAVASCRIPT" => "INTERMEDIATE"];

$identitas = ["Nama" => "Umar Raihan Alfaridzi", "Alamat" => "Desa Jambangan Perumtas 4", "gmail" => "umarraihan945@gmail.com"]; 

$hobi = ["Ngoding", "Musik", "Olahraga"];

echo $sekolah[0];
echo "<br>";
echo $sekolahs["TK"];
echo "<br>";
echo $sekolah[1];
echo "<br>";
echo $sekolahs["SD"];

echo "<br>";
echo "<br>";

// Menampilkan semua value Array

for ($i = 0;$i < 4;$i++){
    echo $sekolah[$i];
    echo "<br>";
}

echo "<br>";

foreach ($sekolah as $key){
    echo $key;
    echo "<br>";
}

echo "<br>";

foreach ($sekolahs as $key => $value){
     echo $key;
     echo "=";
     echo $value;
     echo "<br>";
}

echo "<br>";

foreach ($skills as $key => $value){
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
}

echo "<br>";

foreach ($identitas as $key => $value){
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
}

echo "<br>";

foreach ($hobi as $key){
    echo $key;
    echo "<br>";
}

echo "<br>";

if (isset($_GET["menu"])){
    $menu = $_GET["menu"];
    echo $menu;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <hr>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="menu = CV">CV</a></li>
        <li><a href="menu = Project">Project</a></li>
        <li><a href="menu = Contact">Contact</a></li>
    </ul>
    <h2>identitas</h2>
    <table border="1">
        <thead>
            <tr>
                <th>identitas</th>
                <th>deskripsi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($identitas as $key => $value){
            ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <hr>
    <h2>Riwayat Sekolah</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sekolahs as $key => $value){
                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h2>Riwayat Sekolah</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Skills</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($skills as $key => $value){
                ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
    <hr>
    <h2>hobi</h2>
    <ol>
        <?php
        foreach ($hobi as $key){
            ?>
            <li><?= $key ?></li>
            <?php 
        }
        ?>
    </ol>
</body>
</html>