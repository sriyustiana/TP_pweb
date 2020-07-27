<!DOCTYPE html>
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
include('connet.php');
if( !empty($_REQUEST['j']) ){
    $msg = '<div style="background:#F6F3C0;text-align:center;color:#999;">';
    $msg .= 'Gambar baru telah ditambahkan | <strong>' . $_REQUEST['j'];
    $msg .= '</strong></div>';
    echo $msg;
}
$web = "SELECT * FROM gambar";
$web = mysql_query( $web );
if(!$web){
    die( mysql_error() );
}
while( $rows = mysql_fetch_row($web) ){
    ?>
    <p>
    <img src="<?php echo $url_folder_gambar . $rows[2];?>" width="100" />
    </p>
    <?php
    echo $rows[1];
    ?>
    <hr />
<?php
}
?>
</body>
</html>
</body>
</html>