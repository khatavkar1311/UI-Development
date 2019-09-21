<?php

$stu_id=$_GET['stu_id'];
require_once "connect.php";
extract($_POST);

if(isset($update))
{
	$sql_update="update users_tbl set fname='$name',email='$email',mob='$mobile' where stu_id=$stu_id";
	$resp=mysql_query($sql_update);
	if($resp)
		header('location:display.php');
	else
		echo "Not updated";
}

$sql_qry="select fname,email,mob from users_tbl where stu_id=$stu_id";
$res=mysql_query($sql_qry);
$row=mysql_fetch_assoc($res);
?>

<form method="post" action="">
	Name: <input type="text" name="name" value="<?php echo $row['fname'];?>"/><br/><br/>
	Mobile: <input type="text" name="mobile" value="<?php echo $row['mob'];?>"/><br/><br/>
	Email: <input type="text" name="name" value="<?php echo $row['email'];?>"/><br/><br/>

	<input type="submit" name="update" value="Update"/>
</form>