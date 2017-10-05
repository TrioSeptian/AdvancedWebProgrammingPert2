<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			#header{background: yellow;}
			#sidebar{background: orange;}
			#footer{background: green;}
		</style>
	</head>
	<body>
		<div id="header"><h1>Sistem Informasi Kampus Kalbis Institute</h1></div>
		<div id="sidebar">
			<a href="template.php?page=mahasiswa">Data Mahasiswa</a> &nbsp&nbsp&nbsp|
			<a href="template.php?page=dosen">Data Dosen</a>&nbsp&nbsp&nbsp|
			<a href="template.php?page=matakuliah">Data Matakuliah</a>
		</div>
		<div id="content">
			Ini adalah konten
			<?php include($_GET['page'] . ".php"); ?>
		</div>
		<div id="footer">Footer</div>
	</body>
</html>