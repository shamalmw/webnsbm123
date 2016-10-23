<?php
include_once("headereng.php");
?>
<style> a {text-decoration:none;}
form{color:white;}
</style>
<br><br><br><br>
<h3>Uploading a file</h3>
<h4>Select the file to be uploaded</h4><br>
<form action="http://localhost/uploadfile.php" method="POST" enctype="multipart/form-data" bgcolor="yellow">
<input type="file" name="file1" size="50">
<br>
<input type="SUBMIT" value="Send File">
</form>
<br><br><br><br>
<?php
include_once("footereng.php");
?>