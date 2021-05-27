
<?php

require('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Students Records</title>

</head>
<body>
<div class="form">
<p><a href="insert.php">Insert New Record</a></p>
<h2>View Students Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Id</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from studentsTable ORDER BY id;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["firstname"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>


</div>
</body>
</html>
