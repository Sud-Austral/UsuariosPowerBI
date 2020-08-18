<?php
	include("conectar.php");

	$a = $_GET["an"];

	$sql = "Select * From informacion Where año='$a'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $datos = $row["año"].",".$row["masculino"].",".$row["femenino"].",".$row["infectados"];

	$file = fopen("data.txt", "w");
	fwrite($file, $datos . PHP_EOL);
	fclose($file);

	echo $datos."<br>";
	//header("location: data.txt");
?>

<!DOCTYPE html>
<html>
<head>
	<title>POWER BI</title>
</head>
<body>
	<a href="ver.php" target="_blank">Ver Dashboard</a>
</body>
</html>