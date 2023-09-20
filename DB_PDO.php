<?php
try
{
$server="localhost";
$user="root";
$password="";
$db="registration";
$connect=new PDO("mysql:host=$server;dbname=$db","$user","");
}
catch (PDOException $e)
{
echo("Database Is Not Connected"."<br>".$e->getmessage());
}
?>