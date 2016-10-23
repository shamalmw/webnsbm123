<html><body>
<h2>File information</h2>
<hr>
<?php
	$fname=$_FILES["file1"]["name"];
	$type=$_FILES["file1"]["type"];
	$size=$_FILES["file1"]["size"];
	echo "File name: $fname <br>"; 
	echo "File type: $type <br>";
	echo "File size: $size <br>";
	?>

<?php
	$fname=$_FILES["file1"]["name"];
	$ftemp=$_FILES["file1"]["tmp_name"];
	$flag=move_uploaded_file($ftemp,"D:/$fname");
	if($flag)
		echo "File moved successfully";
	else
		echo " Sorry couldn't move";
?>

</body></html>
