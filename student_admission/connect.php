<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='db_admission';
    $connection=mysqli_connect($server,$username,$password,$database);
    if($connection)
    {

    }
    else{
        die("error");
    }
?>