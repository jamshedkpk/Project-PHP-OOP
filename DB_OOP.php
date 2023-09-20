<?php
class connection
{
private $server="localhost";
private $user="root";
private $password="";
private $db="registration";
public $con;
public function __construct()
{
// $this->server means $server
$this->con=new mysqli($this->server,$this->user,$this->password,$this->db);	
if($this->con->connect_error)
{
echo("Database Is Not Connected"."<br>".$this->con->connect_error);
}
}	
}
?>