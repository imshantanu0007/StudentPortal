<?php
 if(isset($_POST['submit2']))
 {			include 'conn.php';
			$collection = $db->student_details;
			$usn = $_POST['usn'];
			$res1 = $collection->count(['_id'=>$usn]);
			if(!$res1)
			{
				echo "<script>alert('First Register the student...');
						location = '1.php'</script>";
			}
			$sem = $_POST['sem'];
			$usn = $_POST['usn'];
			$exam = $_POST['exam'];
			$flatm = $_POST['flatm'];
			$cnsm = $_POST['cnsm'];
			$cnm = $_POST['cnm'];
			$osm = $_POST['osm'];
			$dbmsm = $_POST['dbmsm'];
			$pem = $_POST['pem'];
				$coll = "a".$usn."_marks";  //name of that table or collection  will be foe ex : 1nt16cs138_marks
					
					$collection2 = $db->$coll;
					$res = $collection2->count(['sem'=>$sem,'cateogary'=>$exam]);
					if($res)
					{
						echo "<script>alert('Already added...');
						location = 'marks.php'</script>";
					}
					$per = (($flatm + $cnsm + $cnm + $osm + $dbmsm + $pem)/180)*100;
					
					
					$insert2 = $collection2->insertOne(['sem' => $sem,'cateogary'=>$exam,'flat'=> $flatm ,'cns'=> $cnsm ,'cn'=>$cnm,
					'os'=> $osm ,'dbms' => $dbmsm,'pe'=> $pem ,'percentage(%)'=> $per]);
					
					$count2 = $insert2->getInsertedCount();
					
					if($count2)
					{
						echo "<script>alert('Successfully added...');
						location = '2.php'</script>";
					}
					else
					{
						echo "<script>alert('Fail to add...');
						location = 'marks.php'</script>";
					}
			
 }

?>


<html>
<head>
<title>Marks</title>
</head>

<body background="wall1.png">
<h1 align="center" style="font-family:arial;font-weight:bold;">MARKS OBTAINED</h1>
<form align="center" method = "post">
&nbsp&nbsp<label> USN: <input type="text" name="usn"/></label><br/><br/>
&nbsp&nbsp<label> CATEOGARY: <select name = "exam">
<option>MSE-1</option>
<option>MSE-2</option>
<option>MSE-3</option>
</select></label><br/><br/>
&nbsp&nbsp<label> SEM: <select name = "sem">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select></label><br/><br/>

&nbsp&nbsp<label> FLAT: <input type="text" name="flatm" size="2"/> /30</label><br/><br/>
&nbsp&nbsp&nbsp <label> CNS: <input type="text" name="cnsm" size="2"/> /30</label><br/><br/>
&nbsp&nbsp<label> CN-1: <input type="text" name="cnm" size="2"/> /30</label><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp <label> OS: <input type="text" name="osm" size="2"/> /30</label><br/><br/>
<label> DBMS: <input type="text" name="dbmsm" size="2"/> /30</label><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp <label> PE: <input type="text" name="pem" size="2"/> /30</label><br/><br/>
<input type="submit" name = "submit2" value="SUBMIT">&nbsp&nbsp&nbsp <input type="reset" name = "reset" value="RESET">
</form>
</body>
</html>