<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php
    // komen satu baris
    # komen satu baris
    /*komen banyak baris
    */
    $name = 'Chai';
    echo "<h2>Hello $name </h2>";
    
    $hadir = false;
    $umur = 22;
    $nokp = '010222020525';
    ?>

    <?php
    // operators
    $x = 100;
    $y = '100';

    if ($x !== $y){
        echo 'Tak Sama';
    } else {
        echo 'Masih sama';
    }
    echo '<br>';
    ?>

    <?php
    $x = 10;
    echo $x++;
    echo '<br>';
    echo $x;

    echo '<br>';
    $ibubapa = 'ibu';
    $yatin = 500;
    $piatu = 1000;
    ?>

    <?php
    if ($ibubapa =='ibu' xor $ibubapa =='bapa'){
        echo 'Anak yatin, dapat RM'. $yatin;
    } else{
        echo 'Anak piatu, dapat RM'. $piatu;
    }
    echo '<br>';

    $bandar = 'Arau';
    $baru = 'Bandar: ';
    for($x = 0; $x < strlen($bandar); $x++){
        $baru .= $bandar[$x] . '-';
    }
    echo $baru;
    ?>
</body>
</html>