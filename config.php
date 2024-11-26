<?php
$server = "localhost";
$user = "root";
$password ="";
$dbname = "project246";


//create connection
$connect = mysqli_connect($server, $user, $password, $dbname);

if (!$connect)
{
    die ("ERROR: Cannot connect to the database $dbname on server $server using username $user (" .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
}

//echo "connected successfully";

mysqli_query($connect,"SET NAMES utf8");
?>