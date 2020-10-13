<?php
include 'school_connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>School Admin</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		h4{
			margin-top: 3%;
			font-family: times new roman;

			text-align: center;
		}
		table{
			margin-top: 2%;
			border: 1px solid #000000;
			width: 90%;
		}
		th{
			font-family: times new roman;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td{
			font-family: arial, san-serif;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td:first-child{
			text-align: left;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}

	</style>
	
</head>
<body align="center">
<nav>
<nav class="nav justify-content-center fixed-top bg-primary">
 <div class="container">	
<h1 style="color: aliceblue;">Welcome <?php echo $_SESSION['username'];?></h1>
</div>
<form class="">
<a class="btn btn-primary" href="add.php" role="button"><h3>Add</h3></a>
<a class="btn btn-primary" href="logout.php" role="button"><h3>Logout</h3></a>
</form>
</nav>
</nav>
<br><br>

<h4><b>STUDENT RECORDS BATCH 2020</b></h4>
<table align="center">
	<tr>
		
		<th><h4>NAME</h4></th>
		<th><h4>AGE</h4></th> 
		<th><h4>STANDARD</h4></th>
		<th><h4>DIVISION</h4></th>
		<th><h4>ROLL NO.</h4></th>
		<th><h4>PHP</h4></th>
		<th><h4>MySQL</h4></th>
		<th><h4>HTML</h4></th>
		<th><h4>TOTAL</h4></th>
		<th><h4>OUT OF</h4></th>
		<th><h4>PERCENTAGE</h4></th>
		<th><h4>STATUS</h4></th>
		<th colspan="2"><h4>OPERATION</h4></th>
		
	</tr>
	<?php
	
	$result="SELECT * FROM `student`";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	 
	while($res = mysqli_fetch_array($query)){
	?>
	<tr>
		<td><?php echo $res['name'];?></td>
		<td><?php echo $res['age'];?></td>
		<td><?php echo $res['standard'];?></td>
		<td><?php echo $res['division'];?></td>
		<td><?php echo $res['roll'];?></td>
		<td><?php echo $res['PHP'];?></td>
		<td><?php echo $res['MySQL'];?></td>
		<td><?php echo $res['HTML'];?></td> 
		<td><?php echo $res['total'];?></td>
		<td><?php echo $res['out of'];?></td>
		<td><?php echo $res['percent'];?></td>
		<td><?php echo $res['status'];?></td>
		<td><a class="btn btn-success" href="update.php" role="button">Update</a></td>
		<td><a class="btn btn-danger" href="delete.php" role="button">Delete</a></td>

	</tr>
<?php
}
?>

</table>
</body>
</html>