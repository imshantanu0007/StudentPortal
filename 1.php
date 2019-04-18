<!DOCTYPE html>
<html>
<head><title>STUDENT PORTAL</title>

<style>
body{
background-image:url(wall1.png);
background-size:cover;
}
</style>
</head>
<body>
<h1 align="center" style="font-family:arial;font-weight:bold;">STUDENT PORTAL</h1>
<h3 align="center" ><u>STUDENT REGISTRATION FORM</u></h3>

<form align="center" action="add.php" method="post">
<label> FIRST NAME: <input type="text" name="fname"/></label><br/>
<br/>
<label> LAST NAME: <input type="text" name="lname"/></label><br/>
<br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>USN:<input type="text" name="usn"/></label><br/>
<br/>
<label> GENDER:
&nbsp &nbsp &nbsp &nbsp &nbsp  <input type="radio" name="gender" value="female" checked />Female<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" value="male"/>Male<br>
</label><br/><br/>
<label> EMAIL ID: <input type="text" name="email" size="40"></label><br/><br/>
<label> MOBILE NO.: <input type="text" name="mob" size="10"></label><br/>
<input type="submit" name = "submit1" value="SUBMIT">&nbsp&nbsp&nbsp <input type="reset" name = "reset" value="RESET">
</form>
<div align="center" >
<a href = "marks.php">Add Marks</a>
<a href = "2.php">Show Details</a>
</div>
</body>
</html>