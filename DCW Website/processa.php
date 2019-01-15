<?php
session_start();
include_once("connect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$n_cont = filter_input(INPUT_POST, 'n_cont', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$result_user = "INSERT INTO hospede (nome, data_nascimento, nacionalidade, cidade, email, n_cont, password) VALUES ('$nome', '$data_nascimento', '$nacionalidade', '$cidade', '$email', '$n_cont', '$password')";
$result_user2 = mysqli_query($conn, $result_user);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "Utilizador registado com sucesso";
	header("Location: registo.php");
} else {
	header("Location: registo.php");
}
?>