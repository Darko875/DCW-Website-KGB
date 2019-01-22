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
	<link rel="stylesheet" href="main4.css">
</head>
<body>
	<div class="cabecalho">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li><!--
                 --><li><a href="index.php#901">Serviços</a></li><!--
                 --><li><a href="index.php#902">Perfil</a></li><!--
                 --><li><a href="index.php#903">Ofertas</a></li><!--
                 --><li><a href="index.php#904">Informações</a></li><!--
                 --><li><a href="perfil.php">Perfil</a></li>
                </ul>
            </nav>
        </div>
    </div>
	<form action="processa3.php" method="post" accept-charset="utf-8">
		<h2 class="form-titulo">Reservas</h2>
		<label style="color:lightgray;">	
		<?php 
            if (isset($_SESSION['msg2'])){
                echo $_SESSION['msg2'];
                unset($_SESSION['msg2']); 
            }
        ?>
    	</label><br>
        <label style="color:lightgray;">
        Data de Entrada:
		<input type="date" name="data_entrada">
		</label>
		<label style="color:lightgray;">
		Data de Saída:
		<input type="date" name="data_saida">
		</label>
		<label style="color:lightgray;">
		Nº de Pessoas:
		<input type="number" name="npessoas">
		</label>
		<label style="color:lightgray;">
		Código de Imóvel:
		<input type="number" name="idc">
		</label>
		<input type="submit" name="enviar" id="butao">
	</form>
</body>
</html>