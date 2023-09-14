<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = "us-cdbr-east-06.cleardb.net";
$cleardb_username = "b6429d201979f1";
$cleardb_password = "$80a7d413";
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if($con===false){
    die("ERROR: Could not connect. " .
        mysqli_connect_error());
}
?>