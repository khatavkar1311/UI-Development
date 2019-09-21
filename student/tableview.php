<?php

extract($_POST);

if(isset($register))
{
	include("connect.php");
	
	$conn_sub = implode(",", $sub);
	$image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($image_tmp,"uploads/$image");
	
	$query = "insert into student_details(stu_id,fname,email,mob,dob,gender,address,city,state,country,uname,password,image,subject)
			  values('$stu_id','$fname','$email','$mob','$dob','$gender','$address','$city','$state','$country','$uname','$pass','$image','$conn_sub') ";
	$result = mysql_query($query);
	
	if($result)
		//echo "sucess";
		header('location:display.php');
	else
		echo "failed";
}




/*
include("connect.php");

extract($_POST);

	$conn_sub = implode(',',$sub);

	//$file_tmp = $_FILES['image']['temp'];
	$file_name = $_FILES['image']['name'];
	$image = 'uploads/'.$file_name;
	$ret = move_uploaded_file($file_name,$image);
	if($ret)
	{
		$query = "insert into student_details(stu_id,fname,email,mob,dob,gender,address,city,state,country,uname,password,image,subject) 
		VALUES('$stu_id','$fname','$email','$mob','$dob','$gender','$address','$city','$state','$country','$uname','$pass','$file_name','$conn_sub')";
		$result= mysqli_query($con,$query);
	}*/

?>

