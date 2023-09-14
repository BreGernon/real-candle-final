<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql="DELETE FROM `cst-323`.`candle_database` WHERE (`id` = $id);";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:mainPage.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>