<?php

require('conn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM studentsTable WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>
