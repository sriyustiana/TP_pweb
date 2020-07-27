<!DOCTYPE html> //hapus
<html>
<head>
	<title>halaman</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="upload.php">Input foto</a></li>
			<li><a href="hapus.php">Hapus foto</a></li>
			<li><a href="halaman.php">Halaman</a></li>
		</ul>
	</header>

	<?php
		include 'connet.php';
		$del = $_POST['del'];
		$perintah = sprintf("delete from Gambar where id%=d",$del);
		$perintah1="SELECT * FROM Gambar where id='$del' ";
		$a=@mysqli_query($perintah1,$connet);
		$b=mysqli_fetch_array($a);
		unlink("gambar/$b['Gambar']");
		$del1=@mysqli_query($perintah,$connet);
		if($del1){
			echo "Gambar berhasil di hapus <br/> <a href='halaman.php'> Kembali</a>";
		}else{
			echo "Gagal";
		}
	?>
</body>
</html>
