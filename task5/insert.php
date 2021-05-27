<?php

require('conn.php');


$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$firstname =$_REQUEST['firstname'];
$age = $_REQUEST['age'];

$ins_query="insert into studentsTable (`firstname`,`age`) values ('$firstname','$age')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Students New Record</title>

</head>
<body>
<div class="form">
<p><a href="index.php">students record</a> <a href="index.php">View students Records</a> </p>

<div>
<h1>Insert New Record</h1>
<form firstname="form" method="post" action="insert.php"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter firstname" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input firstname="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>


</div>
</div>
</body>
</html>
