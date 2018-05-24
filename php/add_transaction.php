<?php

  require_once "config.php";

    if (isset($_POST['add'])) {
        $type = $_POST['type_transaction'];
        $colour = filter_input(INPUT_POST, 'colour', FILTER_SANITIZE_STRING);
        $bw = filter_input(INPUT_POST, 'bw', FILTER_SANITIZE_STRING);
        $total = filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);

        $sql = mysqli_query($con, "INSERT INTO transaction(transaction_type, colour, blackwhite, date, total) VALUES ('$type', '$colour', '$bw', NOW(),'$total')");

        if ($sql) {
            echo "<script>alert('Data transaksi telah ditambahkan!')</script>";
            echo "<meta http-equiv='refresh' content='1 url= ../dashboard.php'>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi')";
            echo "<meta http-equiv='refresh' content='1 url= ../add_transaction.php'>";
        }
    } else {
        echo "<script>alert('Data transaksi telah ditambahkan!')</script>";
            echo "<meta http-equiv='refresh' content='1 url= ../dashboard.php'>";
    }

?>
