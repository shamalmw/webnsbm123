<?php
$u=$_POST['login'];
$p=$_POST['password'];

//sql
$sql="SELECT * FROM stu WHERE username='$u' and passwrd='$p'";
//connect
$link=mysqli_connect('localhost','root','','student');
//execute
$data=mysqli_query($link,$sql);
//array
$row=mysqli_fetch_array($data);

if(mysqli_num_rows($data)==1&&(strstr("$row[0]","bsc-ply-com-")))
{

header('location:nsbm.php')	;
}
else if(mysqli_num_rows($data)==1&&(strstr("$row[0]","bsc-ply-bus-")))
{
header('location:nsbmbus.php');	
}
else if(mysqli_num_rows($data)==1&&(strstr("$row[0]","bsc-ply-eng-")))
{
header('location:engineering.php');	
}
else
{
die("wrong");	
}	

?>