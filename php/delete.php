<?php

include 'config.php';

$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM transaction WHERE id=$id");

if($sql) {
    echo "<script>alert('Data transaksi telah dihapus!')</script>";
    echo "<meta http-equiv='refresh' content='1 url= ../dashboard.php'>";
} else {
    echo "<script>alert('Gagal menghapus transaksi')";
    echo "<meta http-equiv='refresh' content='1 url= ../dashboard.php'>";
}

 ?>
