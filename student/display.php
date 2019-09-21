<table border="1">
<tr>
<th>Sr.No</th><th>Name</th><th>Email</th><th>Mobile</th><th>DOB</th><th>Gender</th><th>Address</th>
<th>City</th><th>State</th><th>Country</th><th>Image</th><th>Subject</th><th>Action</th>
</tr>

<?php
require_once "connect.php";

$sql_qry="select stu_id,fname,email,mob,dob,gender,address,city,state,country,image,subject from student_details";

$res=mysql_query($sql_qry);
$count=mysql_num_rows($res);

if($count>0)
{
	$i=1;
	while($row=mysql_fetch_assoc($res))
	{
	?>
		<tr><td><?php echo $i;?></td>
		<td><?php echo $row['fname'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['mob'];?></td>
		<td><?php echo $row['dob'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['city'];?></td>
		<td><?php echo $row['state'];?></td>
		<td><?php echo $row['country'];?></td>
		<td><?php echo $row['image'];?></td>
		<td><?php echo $row['subject'];?></td>
		<td><a href="delete.php? stu_id=<?php echo $row['stu_id'];?>">Delete</a>
		<a href="update.php? stu_id=<?php echo $row['stu_id'];?>">Update</a></td>
		</tr>
	<?php
		$i++; 
	}
}
else
{
	?>
		<tr><td colspan="5" style="color:red">No records found in db..!</td></tr>
	<?php
}
?>
</table>
