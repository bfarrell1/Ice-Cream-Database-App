<?php
	include 'database.php';
	$query = "SELECT * FROM icecreamflavors ORDER BY personalityType";
	$icecreamflavors = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Personalities and Ice Cream </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body class ="bg-light">
<table class="table table-responsive p-4">
	<thead class="thead-dark">
   <!-- table column headings -->
   <tr>
      <th>I or E?</th>
      <th>S or I?</th>
      <th>T or F?</th>
      <th>J or P?</th>
      <th>Type</th>
      <th>Flavor</th>
      <th>Toppings</th>
      <th>Medium</th>
   </tr>
   <?php while ($row = mysqli_fetch_assoc($icecreamflavors)) :  ?>
   <tr>
     <td><?php echo stripslashes($row['personality1']); ?></td>
     <td><?php echo $row['personality2']; ?></td>
     <td><?php echo $row['personality3']; ?></td>
     <td><?php echo $row['personality4']; ?></td>
     <td><?php echo $row['personalityType']; ?></td>
     <td><?php echo $row['flavor']; ?></td>
     <td><?php echo $row['topping']; ?></td>
     <td><?php echo $row['medium']; ?></td>
   </tr>
     <?php endwhile;  ?>
	 </table>
	 <p class="p-2"> To return to the form, click <a href="enter_new_record.php"> here </a></p>
</body>
</html>
