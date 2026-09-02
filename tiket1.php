<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hargabrg=100000;
    $kodepromo ="PROMO30";
    $kodebaru =str_replace("PROMO","","PROMO30");
    //echo $kodebaru;
    $diskon = $hargabrg*($kodebaru/100);
    $total =$hargabrg -$diskon;
    echo "<br>";
    echo "TOTAL BELANJA ANDA:", $total;

    ?>
    
</body>
</html>