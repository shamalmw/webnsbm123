<?php

if(isset($_GET['dow'])){
	
	$path=$_GET['dow'];
	
	$sql="SELECT * FROM documents where path='$path'";
	$link=mysqli_connect('localhost','root','','folder');
	$res=mysqli_query($link,$sql);
	
	header('content-type:application/octet-stream');
	header('content-Disposition:attachment;filename="'.basename($path).'"');
	header('content-Length:'.filesize($path));
	readfile($path);
}
?>
	
	
	
}