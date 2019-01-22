<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Imóveis</title>
	<link rel="stylesheet" href="main5.css">
	<?php 
	include_once("connect.php");
	$consult =  "SELECT * FROM reserva";
	$consulta2 = mysqli_query($conn, $consult);
	?>
	<link rel="stylesheet" href="main4.css">
</head>
<body>
	<div class="cabecalho" align="center">
        <div class="menu" align="center">
            <nav align="center">
                <ul align="center">
                    <li><a href="index.php">Home</a></li><!--
                 --><li><a href="index.php#901">Serviços</a></li><!--
                 --><li><a href="index.php#902">Perfil</a></li><!--
                 --><li><a href="index.php#903">Ofertas</a></li><!--
                 --><li><a href="index.php#904">Informações</a></li><!--
                 --><li><a href="perfil.php">Perfil</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" align="center">
		<table align="center" style="border-spacing: 5px; border: 2px solid lightgray; border-collapse: collapse;">
			<caption style="color:lightgray;" align="center">Imóveis</caption>
			<tbody style="color:lightgray;" align="center">
				<tr>
					<td>Código do Imóvel</td>
					<td>Data de Entrada</td>
					<td>Data de Saída</td>
				</tr>
			</tbody>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($consulta2)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
			<?php  } ?>
			</tbody>
		</table>
	</div>
	<div>
		<a href="reserva.php"><button type="button" href=# class="css3button">Reservar</button></a>
	</div>
</body>
</html>