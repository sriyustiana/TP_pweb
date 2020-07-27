<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="upload.php">Input foto</a></li>
			<li><a href="hapus.php">Hapus foto</a></li>
			<li><a href="hal.php">Halaman</a></li>
		</ul>
	</header>
	<br>
	<form action="" method="post" enctype="multypart/fotm-data">
		<input type="text" name="nama" placeholder="nama foto"><br><br>
		<input type="file" name="foto"><br><br>
		<textarea name="keterangan" rows="10" cols="35" placeholder="keterangan foto"></textarea><br><br>
		<input type="submit" name="save" value="save">
	</form>

	<?php
	
	?>
</body>
</html>