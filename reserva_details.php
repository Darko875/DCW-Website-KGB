<?php 
include_once('dbFunction.php');

	$funObj = new dbFunction();  

	  
       
?>

<!DOCTYPE html>
<html>
<head>
	<title>Imóveis</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./styles/imoveis.css">
</head>
<body>
<div class="container" align="center">
	<div class="header" align="center">
		<div class="headerMenu" align="center">
				<a href="#"><img src="./assets/home_logo.png" alt="logo" style="width: 76px; height: 76px; margin-top: 8px; padding: 0; "/></a>
				<div class="menu">
					<nav>
						<ul>
							<?php $funObj->userName() ?>
							<li><a href="#">Managers</a></li>
							<li><a href="#">Guests</a></li>
						</ul>
					</nav>
				</div>
		</div>
	</div>
		
	<div class="white-block">
		<div class="grid">
            <table>
                <tr>
                    <td></td>
                    <td>Tipo</td>
                    <td>Tipologia</td>
                    <td>Cidade</td>
                </tr>
                <?php $funObj->resImv(); ?>
            </table>
            <table>
                <tr>
                    <td>Nome do hóspede</td>
                    <td>Data de Nascimento</td>
                    <td>Nacionalidade</td>
                    <td>Nº de Contribuinte</td>
                </tr>
                <?php $funObj->resHosp(); ?>
            </table>
            <table>
                <tr>
                    <td>Código da Reserva</td>
                    <td>Data de Entrada</td>
                    <td>Data de Saída</td>
                    <td>Nº de Pessoas</td>
                </tr>
                <?php $funObj->resDetails(); ?>
            </table>
		</div>
	</div>
</div>      
</body>
</html>