<?php

	$para = "danielviana18@gmail.com";
	$assunto = "Contato pelo site";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
		$corpo = "<strong> Mensagem de Contato</strong><br><br>";
		$corpo .= "<strong> Nome: <strong> $nome";
		$corpo .= "<br><strong> Email: <strong> $email";
		$corpo .= "<br><strong> Mensagem: <strong> $mensagem";
		
		$header = "From: $email Reply-to: $email";
		$header .= "Content-Type: txt/html; charset= utf8";
mail($para, $assunto, $corpo, $header);

header("Location: index.php?msg=enviado");
?>
