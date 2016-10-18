<!DOCTYPE HTML>
<html>
<?php session_start();?>
	<head>
		<link href='css/styles.css' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<div class='head-block'></div>
		<div class='container'>
			<h1 class='title'>PHP Color Remover 1.0</h1>
			<h2 class='author'>Author: Brian Moniz</h2>
		</div>
		<div class='container'>
			<form class='inputFile' action='methods/handleFile.php' method='post' enctype='multipart/form-data'>
				<input name='image-file' type='file' />
				<input type='submit' value='Render Image'/>
			</form>
		</div>
	</body>
</html>