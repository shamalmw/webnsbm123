<?php 
$error="error";
$error2="error222";

$sql=mysqli_connect('localhost','root','','folder') or die($error);

$link="select * from documents";
$res=mysqli_query($sql,$link);

?>
<html>
<head>
  <title>DOcuments</title>
 </head>
 <body>
    <a href="upload.php">add new document</a><br>
	<?php
	  while($row=mysqli_fetch_array($res))
	  {
		  $id =$row[0];
		  $name=$row[1];
		  $path=$row[2];
		 echo $id."".$name."<a href='download.php?dow=$path'>download</a><br>"; 
	  }
	  ?>
	  
	</body>
	</html> 