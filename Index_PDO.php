<center>
<?php include_once("DB_PDO.php");?>
<?php
if(isset($_POST['btnsearch']))
{
$name=trim(htmlspecialchars($_POST['txtsearch']));
$query=("select * from admin where Name=:name");
$result=$connect->prepare($query);
$result->bindparam(':name',$name);
$result->execute();
$count=$result->rowCount();
if($count>0)
{
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
$id=$row['ID'];	
$name=$row['Name'];	
$email=$row['Email'];
echo("Your ID Is = ".$id." Your Name Is = " .$name. " Your Email Is = ".$email);
}
}
else
{
echo("not found");
}
}
if(isset($_POST['btnadd']))
{
$name=trim(htmlspecialchars($_POST['name']));
$password=trim(htmlspecialchars($_POST['password']));
$email=trim(htmlspecialchars($_POST['email']));
$query=("insert into admin (Name,Password,Email) values(:name,:password,:email)");
$result=$connect->prepare($query);
$result->bindparam(':name',$name);
$result->bindparam(':password',$password);
$result->bindparam(':email',$email);
$result=$result->execute();
if($result)
{
header("Location:Index_PDO.php");	
}
}
?>
<form method="post" autocomplete="true">
<div>
<br>
<h3>Please Fill The Form Below To Perform Any Action</h3>
</div>
<hr>
<br>
Enter Name : <input type="text" name="txtsearch">
<button name="btnsearch">Search</button>
<hr>
<br>
<label>Name:</label>
<input type="text" name="name">
<label>Password:</label>
<input type="text" name="password">
<label>Email:</label>
<input type="text" name="email">
<button name="btnadd">Add Record</button>
<hr>
<br>
</form>
</center>