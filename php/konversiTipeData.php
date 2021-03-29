<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>

	<?php
	// penanda menggunakan php

		$a=300.4;
		// deklarasi variable

		echo $a;
		// menampilkan a
		echo "<br>";

		echo "tipe Double : ",doubleval($a),"<br>";
		// mengubah tipe data ke double
		
		echo "tipe Integer : ",intval($a),"<br>";
		// mengubah tipe data ke integer

		echo "tipe string :", strval($a);
		//mengubah tipe data a menjadi string
	?>
</body>
</html>
