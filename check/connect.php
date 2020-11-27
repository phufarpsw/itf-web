<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'dbitf01.mysql.database.azure.com', 'pisitchai@dbitf01', '3114Kung', 'testitf', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>