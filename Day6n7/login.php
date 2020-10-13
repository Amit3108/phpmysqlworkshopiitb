<?php
require 'school_connect.php';

?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Login</title>
	<style>
		form{
			margin-top: 25%;
		}
		h1{
			text-align: center;
		}
		.bg{
			background: url('../Day6n7/images.jpg');
			width:100;
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
<body>
	<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3 style">

		
	<form  method="post" align="center" class="form-container">
		<div><h1>LOGIN PAGE</h1></div><br>
		<div class="form-group" >
			
		<label>Username: </label><input type="text" name="username" placeholder="Username"></div>
		<div class="form-group" ><label>Password: </label><input type="password" name="pass" placeholder="Password"></div>
		
		<div class="form-group" ><label>Usertype: </label><select name="usertype">
			<option value="select">Select User Type</option>
			<option value="admin">Admin</option>
			<option value="student">Student</option>
		</select>
	
	</div>

		<br>
		
	<div>	<input class="btn btn-primary" type="submit" name="submit" value="Login"></div>
	<br>
	<div>   <a class="btn btn-primary" href="registrer.php" role="button">Register</a></div>


	</form>
</section>
</section>
</section>
<?php
if (isset($_POST['submit'])) {
session_start();
$uname=trim($_POST['username']);
$pass =trim($_POST['pass']);

$utype=$_POST['usertype'];
if ($utype=='select'||$uname==""||$pass=="") {
echo "<br>Some fields are empty";
}
else if($utype=='admin'&&$uname=='admin' && $pass=='admin'){
	$_SESSION['username'] = $uname;
    header('Location: admin.php');
	
}
else{
	$result = "SELECT `roll`,`pass` FROM student WHERE `roll`='$uname'";
    $query = mysqli_query($conn,$result);
    $count = mysqli_num_rows($query);

    if($count != 0)
    {
      while($row= mysqli_fetch_assoc($query)){
      $roll = $row['roll'];
      $password = $row['pass'];
  }

      if($uname== $roll && $pass==$password)
      {
        $_SESSION['username'] = $uname;
        header('Location: portal.php');
      }
      else
        echo "<br>Incorrect password ..Try again";
    }
    else
      die("<br>User does not exist");
}
}
?>
</body>
</html>