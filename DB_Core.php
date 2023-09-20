<?php
$server="localhost";  // Server Name
$user="root";             // User Name
$password="";             // User Password
$db="registration";       // Database Name
$connect=mysqli_connect($server,$user,$password,$db);
if(!$connect)
{
echo("Database Is Not Connected"."<br>".mysqli_connect_error());
}
?>