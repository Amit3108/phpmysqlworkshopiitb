<?php
	include 'school_connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESULT PORTAL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin-top: 5%;
		}
		table{
			font-size: 18px;
			margin-top: 3%;
			border: 1px solid #000000;
			width: 40%;
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
		th:first-child{
			text-align: left;
			font-style: bold;
		}
		
	</style>
	  
</head>
</head>
<body align="center">
	<nav>
		<nav class="nav justify-content-center fixed-top bg-primary">
   			 <div class="container">
				<h1 style="color: aliceblue;">FINAL EXAM RESULT 2020</h1>
</div>
	<form class="">
	<a class="btn btn-primary" href="logout.php" role="button"><h3>Logout</h3></a>
</form>
</nav>
</nav>


<?php
$roll=$_SESSION['username'];


$result="SELECT * FROM `student` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
?><br>
<center><h2>HERE GOES YOUR RESULT!!</h2></center>
	<table align="center">
		<tr><th>Name</th><td><?php echo $res['name'];?></td></tr>
		<tr><th>Std & Div</th><td><?php echo $res['standard']."-".$res['division'];?></td></tr>
		<tr><th>Roll No.</th><td><?php echo $res['roll'];?></td></tr>
		<tr><th>PHP</th><td><?php echo $res['PHP'];?></td></tr>
		<tr><th>MySQL</th><td><?php echo $res['MySQL'];?></td></tr>
		<tr><th>HTML</th><td><?php echo $res['HTML'];?></td></tr>
		<tr><th>Total obtained</th><td><?php echo $res['total'];?></td></tr>
		<tr><th>Out of</th><td><?php echo $res['out of'];?></td></tr>
		<tr><th>Percentage</th><td><?php echo $res['percent'];?></td></tr>
		<tr><th>Status</th><td><?php echo $res['status'];?></td></tr>
		

	</table>
		

<?php
	}

$roll=$_SESSION['username'];

$result="SELECT * FROM `student` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
	if($res['status']=="DISTINCTION"){
		echo "<br><center><h4>Congratulations!!! You Secured DISTINCTION in Your Exam</h4></center>";
	}
	elseif($res['status']=="PASS"){
		echo "<br><center><h4>Improvents needed!!!</br></center>";

	}
	else{
		echo "<br><center><h4>Fail!!Better Luck Next Time</h4></center>";
	}
}
	?>

<form method="post">

	<center><input type="text" name="email" placeholder="Mail to">
	<a class="btn btn-primary" href="sendmail.php" role="button" mail="mail">Send Mail</a></center>

<?php
session_start();
if(isset($POST['mail'])){
	$roll=$_SESSION['username'];
	$email=$_SESSION['email'];
}
/*$result="SELECT * FROM `student` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
		$name=$res['name'];
		$php=$res['PHP'];
		$mysql=$res['MySQL'];
		$html=$res['HTML'];
		$tot=$res['total'];
		$per=$res['percent'];
		$stat=$res['status'];
		echo "<br><center><h4> Mail sent successfully</h4></center>";
		$mailto=$_POST["email"];
		$adminmail ="amitnaik3108@gmail.com";
		$subject="Final Exam Result of your Ward";
		$msg="Hello Sir/Madam,\n Final Exam Results has been declared.Your Ward Mr./Ms. $name are as follows:\nMarks Obtained:\nPHP: $php/100\nMYSQL: $mysql/100\nHTML: $html/100\nTOTAL: $tot/300\nPERCNETAGE: $per\nFINAL STATUS: $stat";
		$msg= wordwrap($msg,200);
		$headers="From: amitnaik3108@gmail.com";
		$headers1 ="From : $mailto";
		mail($mailto, $subject,$msg,$headers);

}
}**/
?>
</form>

</body>
</html>