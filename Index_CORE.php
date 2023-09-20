<center>
<?php include_once("DB_Core.php");?>
<?php
if(isset($_POST['btnsearch']))
{
$name=trim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['txtsearch'])));
$query=("select * from admin where Name='".$name."' ");
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
while($row=mysqli_fetch_array($result))
{
$id=$row['ID'];	
$name=$row['Name'];	
$email=$row['Email'];
echo("Your ID Is = ".$id." Your Name Is = " .$name. " Your Email Is = ".$email);	
}
}
else
{
echo("Record Is Not Found");
}
}
if(isset($_POST['btnadd']))
{
$name=trim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['name'])));
$password=trim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['password'])));
$email=trim(htmlspecialchars(mysqli_real_escape_string($connect,$_POST['email'])));
$query=("insert into admin (Name,Password,Email) values ('".$name."','".$password."','".$email."')");
$result=mysqli_query($connect,$query);
if($result)
{
header("Location:Index_CORE.php");	
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