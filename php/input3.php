<!DOCTYPE html>
<html>
<head>
	<title>Identitas</title>
</head>
<body>
	<!--membuat form yang menggunakan method POST-->
	<form method="POST" action="postAct3.php">
		<h2 align="center">BIODATA</h1>
		<!--membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--membuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Rumah</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">No. WA</td>
				<td><input type="text" name="wa"></td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<td width="130">Cita-cita</td>
				<td><input type="text" name="cita-cita"></td>
			</tr>
		</table>
		<!--membuat tombol untuk mengeksekusi file postAct.php-->
		<p align="center"><input type="submit" name="btnLogin" value="Submit"> <input type="reset" name="reset" value="Reset"></p>
	</form>
</body>
</html>
