<?php
	session_start();
	if(isset($_POST['submit1']))
	{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$usn = $_POST['usn'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$mob = $_POST['mob'];
			  //check this file it has connection details with your mongodb database
			include 'conn.php';
			$collection = $db->student_details;
			$res = $collection->find(['_id' => $usn]);
				
				$insert = $collection->insertOne(['_id' => $usn,'fname'=>$fname,'lname'=>$lname ,'gender'=>$gender,
				'email'=>$email,'mob' => $mob]);
				
				$count = $insert->getInsertedCount();
				if($count)
				{
					echo "<script>alert('Successfully added...');
						location = '1.php'</script>";
				}
				else
				{
					echo "<script>alert('Fail to add...');
						location = '1.php'</script>";
				}
	}
	else
	{
		
		echo "<script>alert('Fill the details first...');
				location = '1.php'</script>";	
	}	
	
	
	


?>