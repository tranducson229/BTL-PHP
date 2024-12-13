<?php
     $sever="localhost";
     $user="root";
     $pass="";
     $database="html";

    $conn = mysqli_connect ($sever, $user, $pass, $database);
    $run  = mysqli_query($conn, 'set names "utf8"');


?>