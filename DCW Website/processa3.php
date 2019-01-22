<?php  
session_start();
include_once("connect.php");
$id = filter_input(INPUT_POST, 'idc', FILTER_SANITIZE_STRING);
$data_entrada = filter_input(INPUT_POST, 'data_entrada', FILTER_SANITIZE_STRING);
$data_saida = filter_input(INPUT_POST, 'data_saida', FILTER_SANITIZE_STRING);
$npessoas = filter_input(INPUT_POST, 'npessoas', FILTER_SANITIZE_STRING);
$nid = $_SESSION['nid'];


if (isset($_POST["enviar"])) {

	$query = "SELECT * FROM reserva 
	WHERE DATE_FORMAT(data_entrada, '%Y-%m-%d') >= '$data_entrada'
	AND '$data_entrada' AND DATE_FORMAT(data_saida, '%Y-%m-%d') <= '$data_saida'
	AND idc = '$id'";

	$resu2 = mysqli_query($conn, $query);

	$resu3 = mysqli_fetch_array($resu2);

	if (count($resu3) === 0) {
		$consult = "INSERT INTO reserva (data_entrada, data_saida, npessoas, nid, idc) VALUES ('$data_entrada', '$data_saida', '$npessoas', '$nid', '$id')";
		$consult2 = mysqli_query($conn, $consult);
		$consult3 = mysqli_fetch_array($consult2);
			header('Location: perfil.php');	
	}
	else {
		$_SESSION['msg2'] = "A sua reserva não pôde ser executada.";
		header("Location: reserva.php");
	}
} else {
	$_SESSION['msg2'] = "A sua reserva não pôde ser executada.";
	header("Location: reserva.php");
}









?>