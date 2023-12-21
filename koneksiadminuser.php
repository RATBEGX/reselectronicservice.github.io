<?php
    $usad = mysqli_connect("localhost","root","","formloginservis");
    
    if (mysqli_connect_errno())
    {
        echo "koneksi database gagal : ". mysqli_connect_error();
    }else
    {
        echo "koneksi tersambung";
    }
?>