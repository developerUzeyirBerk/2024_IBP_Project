<?php

$vt_server="localhost";
$vt_user="root";
$vt_password="";
$vt_name="communication";


$connect=mysqli_connect($vt_server, $vt_user, $vt_password, $vt_name);

if(!$connect){
die("Database connection operation failed!".mysqli_connect_error());
}

?>