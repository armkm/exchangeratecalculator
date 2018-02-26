<?php
$thb = $_POST['THB'];
$type = $_POST['type'];
$result = 0;
$rate = 0;


if($type == "USD"){
    $result = $thb / 31.2273;
}
elseif ($type == "JYP"){
    $result = $thb / 28.9814;
}
elseif ($type == "KRW"){
    $result = $thb / 0.0290;
}
elseif ($type == "GBP"){
    $result = $thb / 43.3292;
}
elseif ($type == "EUR"){
    $result = $thb / 38.2737;
}

//2
if($type == "USD"){
    $rate =  31.2273;
}
elseif ($type == "JYP"){
    $rate = 28.9814;
}
elseif ($type == "KRW"){
    $rate = 0.0290;
}
elseif ($type == "GBP"){
    $rate = 43.3292;
}
elseif ($type == "EUR"){
    $rate = 38.2737;
}

//echo 'result : '.$thb/$rate;



//3

switch ($type){
    case 'USD':
        $rate = 31.2273;
        break;
    case 'JYP':
        $rate = 28.9814;
        break;
    case 'KRW':
        $rate = 0.0290;
        break;
    case 'GBP':
        $rate = 43.3292;
        break;
    case 'EUR':
        $rate = 38.2737;
        break;
}
//echo 'result : '.$thb/$rate;
require 'connect.php';
$sql = "INSERT INTO exch381_history(thb,calculate,currency)
VALUES('$thb',$result,'$type')";
$sql_exe = $conn -> query($sql);
//print($sql_exe);
?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Exchange</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .box{
            margin: 0 auto;
            width: 700px;
            padding: 40px;
            border-radius: 10px;
            background: white;
            margin-top: 50px;
        }
        body{
            background: #2f1bb9;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="box">
    <?php
    echo '<br><br><h1>ค่าที่กรอกคือ '.$thb;
    echo '<br>';
    echo 'สกุลเงินที่ใช้คำนวน ' .$type;
    echo '</h1><br>';
    echo '<h4>result : '.$result.'</h4><hr>';

    $sql = "SELECT * FROM `exch381_history` ORDER BY `exch381_history`.`dateRecord` DESC";
    $sql_exe = $conn->query($sql);
    echo '<table class="table table-striped">';
    while ($row = mysqli_fetch_assoc($sql_exe)){
        echo '<tr><td>';
        echo ''.$row['thb'].' THB exchange to '.$row['currency']." = ".$row['calculate'].' <h6 class="text-secondary" style="font-size: 12px; margin-top: 5px;"> date record : '.$row['dateRecord'].'</h6>';
        echo '</td>';
    ?>

        <td>  <a class="btn btn-danger float-right" href="delete.php?id=<?php echo $row['recordID']?>&thb=<?php echo $row['thb']?>">delete</a>
    <?php
    echo '</tr>';
    }
    echo '</table>';

    $conn ->close();
    ?>
    </div>
    </div>

    </body>
    </html>
