
<?php
$sekolah = ["sdn entalsewu", "smpn 1 sidoarjo", "smkn 2 buduran"];
$sekolahs = ["tk" => "tk dharma wanita", "sd" => "sdn entalsewu", "smp" => "smpn 1 sidoarjo","smk" => "smkn 2 buduran", "pt" => "universitas negeri surabaya"];

$skills = ["c++" => "expert", "html" => "newbie", "css" => "intermediate", "php" => "intermediate", "javascript => intermediate"];

$identitas = ["nama" => "Septa Putra Ramadhan", "alamat" => "desa entalsewu rt 13 rw 04","gmail" => "septaputrar21@gmail.com"];

$hobi = ["bersepeda", "mancing"];

echo $sekolah[0];
echo "<br>";
echo $sekolahs[tk];
echo "<br>";
echo $sekolah[1];
echo "<br>";
echo $sekolahs[sd];

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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <hr>
    <ul>
        <li><a href="#">Home</a></li>   
        <li><a href="#">CV</a></li>   
        <li><a href="#">Project</a></li>   
        <li><a href="#">Contact</a></li>   
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
    <table>
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
            echo "</td";
            echo "<td>";
            echo $value;
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <h2>Riwayat Sekolah</h2>
    <table>
         <thead>
              <tr>
                <th>$skills</th>
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