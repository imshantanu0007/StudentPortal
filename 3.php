<?php
	if(isset($_POST['submit']))
	{
		include 'conn.php';
		$usn = $_POST['usn'];
		$student = "a".$usn."_marks";
		$collection = $db->student_details;
		$collection2 = $db->$student;
		$res1 = $collection->find(['_id' => $usn]);
		$res2 = $collection2->find();
		
			
	}
?>


<!DOCTYPE html>
<head><title>STUDENT PORTAL</title>

<style>
body{
background-image:url(wall3.png);
background-size:cover;
}
</style>
</head>
<body>
<h1 align="center" style="font-family:arial;font-weight:bold;">STUDENT PORTAL</h1>
<h3 align="center" ><u>RESULT</u></h3>
<table border="1" align="center">
<?php
	foreach($res1 as $detail){ ?>

<tr>
<th>FIRST NAME:</th>
<td><?php echo $detail['fname'];?></td>
</tr>
<tr>
<th>LAST NAME:</th>
<td><?php echo $detail['lname'];?></td>
</tr>
<tr>
<th>USN:</th>
<td><?php echo $detail['_id'];?></</td>
</tr>
<tr>
<th>GENDER:</th>
<td><?php echo $detail['gender'];?></</td>
</tr>
<tr>
<th>EMAIL ID:</th>
<td><?php echo $detail['email'];?></</td>
</tr>
<tr>
<th>MOBILE NO.:</th>
<td><?php echo $detail['mob'];?></</td>
</tr>
<?php	} ?>
 
<?php
	foreach($res2 as $detail2){ ?>


<tr>
<th>SEM:</th>
<td><?php  echo $detail2['sem'];?></td>
</tr>	
<tr >
<th colspan="2">MARKS OBTAINED IN <?php echo $detail2['cateogary']."   ".$detail2['sem']."Th SEM";?></th>
</tr>
<tr>
<th>FLAT:</th>
<td><?php  echo $detail2['flat'];?></td>
</tr>
<tr>
<th>CNS:</th>
<td><?php  echo $detail2['cns'];?></td>
</tr>
<tr>
<th>CN-1:</th>
<td><?php  echo $detail2['cn'];?></td>
</tr>
<tr>
<th>OS:</th>
<td><?php  echo $detail2['os'];?></td>
</tr>
<tr>
<th>DBMS:</th>
<td><?php  echo $detail2['dbms'];?></td>
</tr>
<tr>
<th>PE:</th>
<td><?php  echo $detail2['pe'];?></td>
</tr>
	
<tr>
<th>PERCENTAGE:</th>
<td><?php echo $detail2['percentage(%)'];?></td>
</tr>
<?php } ?>
</table>
</body>
</html>


