<html>
<head>
<title>User Signup</title>
</head>
<style>
.head1{
color:blue;
width:50%;
height:40%;
font-size:150%;
}
a{
 text-decoration: none;
 display: inline-block;
 color:white;
 background-color: red;
 width: 10%;
 height:10%;
}
</style>
<body>
<?php
extract($_POST);
include("config.php");
$rs=mysqli_query($conn,"select * from user_details where uname='$uname'");
if (mysqli_num_rows($rs)>0)
{

   echo "<br><br><center><div class=head1>Username Already Exists
   <br><br><a href='signup.php'>Back</a></div></center>";

  exit;
}
$query="insert into user_details(firstname,lastname,uname,psw,cpsw) values('$fname','$lname','$uname','$psw','$cpsw')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<img src='success1.png'>
<h2>username $uname created successfully</h2>
<p>login to <a href='login.php'>login</a>";
?>
</body>
</html>
  
