<!DOCTYPE html>
<html>
<head>
	<title>Triangle</title>
</head>
<body>

<form action="" method="get">

Length of Side 1:<input type="number" name="s1"><br>
Length of Side 2:<input type="number" name="s2"><br>
Length of Side 3:<input type="number" name="s3"><br>
<input type="submit" name="submit">
<br>

<?php
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$s3=$_GET['s3'];

if($s1==$s2&& $s2==$s3){
	echo "It is an Equilateral Triangle..";
}
elseif($s1==$s2 || $s2==$s3 || $s1==$s3){
	echo "It is an Isoceles triangle..";
}
elseif (($s1*$s1 + $s2*$s2==$s3*$s3) || ($s1*$s1 + $s3*$s3==$s2*$s2) || ($s2*$s2 + $s3*$s3==$s1*$s1)) {
	echo "It is a Right Angled triangle..";
}
else{
	echo "It is a Scalene triangle..";
}

?>
		

</form>

</body>
</html>