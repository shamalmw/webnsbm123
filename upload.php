<?php
$error="error";
$error2="error222";

?>
<?php

if(isset($_POST['submit'])){
	
	$doc_name=$_POST['doc_name'];
	
	$name  =$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
	if($name && $doc_name){
	
	   $location="documents/$name";
	   move_uploaded_file($tmp_name,$location);
	   $link=mysqli_connect('localhost','root','','folder') or die(error);
	   $sql="INSERT INTO documents (name,path) VALUES ('$doc_name','$location')";
        
        $res=mysqli_query($link,$sql);		
	     header('LOcation:index.php');
		 
	}else{
	die("fail uploaded");}	
}
?>


<html>
<head>
  <title>upload document</title>
  
 </head>
 <body> 
    <form action="upload.php" method="post" enctype="multipart/form-data">
	  
	  <label>Document name</label>
	  <input type="text" name="doc_name">
	  <input type="file" name="myfile">
	  <input type="submit" name="submit" value="upload">
	  </form>
	  </body>
	  </html>
	  