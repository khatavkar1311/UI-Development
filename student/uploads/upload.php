<?php
if(isset($_FILES['image']))
{
	$file_tmp=$_FILES['image']['tmp_name'];
	$file_name=$_FILES['image']['name'];
	$file_size=$_FILES['image']['size'];
	
	$arr=explode(".",$file_name);
	$ext=strtolower(end($arr));
	
	$extension=array("jpg","jpeg","png","gif");
	$flag=true;
	if(!in_array($ext,$extension))
	{
		$flag=false;
		echo "Invalid file";
	}	
	if($file_size>2097152)
	{
		$flag=false;
		echo "File size should be less than 2MB";	
	}
	if($flag)
	{
		if(move_uploaded_file($file_tmp,'uploads/'.$file_name))
			echo "Success";
		else
			echo "Failed";
	}
}	
?>

<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="image"><br/><br/>
<input type="submit" name="upload" value="Upload">
</form>