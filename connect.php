<?php
//    if($_SERVER['HTTP_HOST']=='localhost'){
        $DB_SERVER = 'localhost';
        $DB_USER_READER = 'root';
        $DB_PASS_READER = 'Silpakorn60';
        $DB_NAME = 'db13580183';
//    }
//    else{
//        $DB_SERVER = 'localhost';
//        $DB_USER_READER = 'u13580183';
//        $DB_PASS_READER = 'Z#K}Va9xwe';
//        $DB_NAME = 'db13580183';
//    }

    $conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);
//    ตรวจสอบ

    if($conn -> connect_error){
        die("conection failed".$conn -> connect_error);
    }

    mysqli_set_charset($conn, "utf-8");

?>