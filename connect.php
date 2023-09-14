<?php

$con=new mysqli('localhost', 'root', 'password', 'cst-323');

if($con===false){
    die("ERROR: Could not connect. " .
        mysqli_connect_error());
}
?>