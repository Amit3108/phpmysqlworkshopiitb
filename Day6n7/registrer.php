<?php
require 'school_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<style>
		form{
			margin-top: 15%;
		}
		h1{
			text-align: center;
		}
		.bg{
			background: url('../Day6n7/images.jpg');
			width:100%;
			height:100vh;
			background-size: 100%;
		}
		.form-container{
			background:#ffff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}

		.style input{
			width: 250px;
    border-radius: 10px;

		}
		.style select{
			width: 250px;
			border-radius: 10px;
		}
		.style a{
			width: 250px;
			border-radius: 10px;
		}
		
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body align="center">
	<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3 style">
	<form  method="post" align="center" class="form-container">
		<h2>STUDENT REGISTRATION</h2>
		

	<div class="form-group"><label>Full Name:</label><input type="text" name="name"></div>
	<div class="form-group"><label>    Age  :</label><br><input type="number" name="age"></div>
	<div class="form-group"><label>Standard :</label><input type="number" name="std"></div>
	<div class="form-group"><label>Division :</label><input type="text" name="div"></div>
	<div class="form-group"><label>Roll no.(eg.D301) </label><input type="text" name="roll"></div>
		
		
		<div><input class="btn btn-primary" type="submit" name="submit" value="Submit"></div><br>
		
		<div><a class="btn btn-primary" href="login.php" role="button">Back</a></div>
	</form>
</section>
</section>
</section>
<?php
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$age=$_POST['age'];
$std=$_POST['std'];
$div=$_POST['div'];
$roll=$_POST['roll'];
$result = mysqli_query($conn,"INSERT INTO `student`(`name`, `age`, `standard`, `division`, `roll`,`pass`) VALUES ('$name','$age','$std','$div','$roll','$roll')");
if($result){
	echo "<br>Regsitration Successful..";
}	
else{
	echo "<br>Registration failed..";
}

}
?>
</body>
</html>