<?php 
session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reservas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="processa3.php" method="post" accept-charset="utf-8">
		<input type="number" name="idc">
		<input type="date" name="data_entrada">
		<input type="date" name="data_saida">
		<input type="number" name="npessoas">
		<input type="submit" value="Enviar" id="butao">
	</form>
</body>
</html>