<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "dbupe";

    $con = mysqli_connect($host, $user, $pass, $db);
    
    if(!$con){
      echo "gagal";
    }

?>
