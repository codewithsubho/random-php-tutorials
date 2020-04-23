<?php

if(isset($_POST['submit']) && $_POST['submit'] != "")
{
	$exp = explode('.',$_FILES['file']['name']);	
	$ext = end($exp);
	$dir = './uploads/';
	$name = "my-files-".time().".".$ext; // my-files-157959755951.jpg
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $dir.$name);

	if($upload)
	{
		echo "<h1>File Uploaded Successfully</h1>";
	}
	else
	{
		echo "<h1>FIle Not Uploaded. Please try again.</h1>";
	}
}
else
{
	header("Location: index.php");
}

?>