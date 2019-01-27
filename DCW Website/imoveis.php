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
	$consult =  "SELECT * FROM imovel";
	$consulta2 = mysqli_query($conn, $consult);
	?>
	<link rel="stylesheet" href="main3.css">
</head>
<body>
	<div class="cabecalho">
        <div class="menu">
            <nav>
                <ul>
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
					<td>Tipo</td>
					<td>Tipologia</td>
					<td>Preço</td>
					<td>Descrição</td>
					<td>Cidade</td>
					<td>Imagem</td>
					<td>Calendário</td>
				</tr>
			</tbody>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($consulta2)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['tipo']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['tipologia']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['preco']. " $";?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['descricao']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['cidade_im']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><img src="<?php echo $row['image']; ?>"></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><a href=" calendario<?php echo $row['idc']; ?>.php"><button class="css3button"><?php echo "Calendário ". $row['idc']; ?></button></a></td>
				</tr>
			<?php  } ?>
			</tbody>
		</table>
	</div>
</body>
</html>