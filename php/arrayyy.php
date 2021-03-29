<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>

	<?php
	// penanda menggunakan php

		$nama[]="Krisya";
		$nama[]="Nurul";
		$nama[]="Khoiriyah";

		// deklarasi variable

		echo $nama[1].$nama[2].$nama[0];
		echo "<br>";
		// isi array

		$jum_array=count($nama);
		echo "jumlah elemen array = ".$jum_array;
		// mengitung jumlah 
	?>
</body>
</html>
