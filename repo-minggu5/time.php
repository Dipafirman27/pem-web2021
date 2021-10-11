<!DOCTYPE html>
<html>
<head>
<title>Time</title>
</head>
<body>
	<?php 
	echo date('Y-m-d');
	echo "<br/>";
	echo date('l, d / m / Y');
	echo "<br/>";
	echo date('d - M - y');
	echo "<br/>";
	echo date('D - M / Y');
	echo "<br/>";
	echo "<br/>";
	date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
	echo date('h:i:s a'); // menampilkan jam sekarang
	echo "<br/>";
	echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
	?>
</body>
</html>