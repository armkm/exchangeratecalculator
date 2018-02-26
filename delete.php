<?php
require 'connect.php';

$id = $_REQUEST['id'];
$thb = $_REQUEST['thb'];

$sql = "DELETE FROM `exch381_history` WHERE `exch381_history`.`recordID` = '$id'";
$sql_exe = $conn->query($sql);



?>
<!DOCTYPE html>
<html lang="th">
<head>
    
    <meta charset="UTF-8">
    <title>Exchangee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .box{
            margin: 0 auto;
            width: 560px;
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
    <br>
    <h1>
    <?php if($sql_exe) {
        echo "Delete complete id = ".$id."<br> THB = ".$thb;
        header( "Refresh:3; url=index.php", true, 60);
    }
    else{
        echo "Delete fail";

    }?>
    </h1>
    </div>
</div>
</body>
</html>
