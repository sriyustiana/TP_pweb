
<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<?php include 'connet.php'; ?>
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
	<br>
	<form action="" method="post" enctype="multypart/fotm-data">
		<input type="text" name="nama" placeholder="nama foto"><br><br>
		<input type="file" name="foto"><br><br>
		<textarea name="keterangan" rows="10" cols="35" placeholder="keterangan foto"></textarea><br><br>
		<input type="submit" name="save" value="save">
	</form>

	<?php
		if( isset($_REQUEST['submit']) ){
 		include('db.php');
 		$title = $_REQUEST['judul'] ? htmlspecialchars($_REQUEST['judul']) : 'blun ada judul';
 
    $filename = basename($_FILES['userfile']['name']);
    $uploadfile = $dir_gambar . $filename;
 
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        $query = "INSERT INTO gambar VALUES('', '$title', '$filename')";
        $query = mysql_query($query);
        if(!$query){
            die( mysql_error() );
        }
        header('Location: galeri.php?j=' . $title);
        exit();
    } else {
        echo "Tidak bisa upload!\n";
    }
}else{
    echo "Terjadi kesalahan <a href='index.php'>Kembali</a>";
}
?>
</body>
</html>