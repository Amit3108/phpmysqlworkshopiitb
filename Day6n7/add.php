<?php
include 'school_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD STUDENT DETAILS</title>
	<style>
		form{
			margin-top: 25%;
		}
		h1{
			text-align: center;
		}
		.bg{
			background: url('../Day6n7/images.jpg');
			width:100%;
			height:1000px;
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

	<form method="POST" align="center" class="form-container">
	
	<div><h4>ADD NEW STUDENT DETAIL</h4></div>
	<div class="form-group" ><label>Full Name:</label><input type="text" name="name"></div>
	<div class="form-group" ><label>    Age  :</label><br><input type="number" name="age"></div>
	<div class="form-group" ><label>Standard :</label><input type="number" name="std"></div>
	<div class="form-group" ><label>Division :</label><input type="text" name="div"></div>
	<div class="form-group" ><label>Roll no. </label><input type="text" name="roll"></div>
	<div class="form-group" ><label>PHP</label><br><input type="number" name="php"></div>
	<div class="form-group" ><label>MySQL</label><input type="number" name="mysql"></div>
	<div class="form-group" ><label>HTML</label><input type="number" name="html"></div>
	

	
	<br>
	<div>	<input class="btn btn-primary" type="submit" name="add " value="Add"></div>
	<br>
	<div>   <a class="btn btn-primary" href="admin.php" role="button">Back</a></div>
</form>
</section>
</section>
</section>

<?php
if (isset($_POST['add'])) {
$name=$_POST['name'];
$age=$_POST['age'];
$std=$_POST['std'];
$div=$_POST['div'];
$roll=$_POST['roll'];
$php=$_POST['php'];
$mysql=$_POST['mysql'];
$html=$_POST['html'];
$sum=$php+$mysql+$html;
$out=300;
$per=($sum/$out)*100;

if($per>60){
	$status="DISTINCTION";
}
elseif($per<35){
	$status="FAIL";
}
else{
	$status= "PASS";
}
$result = mysqli_query($conn,"INSERT INTO `student`(`name`, `age`, `standard`, `division`, `roll`, `pass`, `PHP`, `MySQL`, `HTML`,`total`, `out of`, `percent`,`status`) VALUES ('$name','$age','$std','$div','$roll','$roll','$php','$mysql','$html','$sum','$out','$per','$status')");
if($result){
	echo "<br>Details Added Successfully..";
}	
else{
	echo "<br>Add details Failed..";
}

}
?>
</body>
</html>