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
	$row = mysqli_fetch_assoc($consulta2);
	?>
</head>
<body>
	<table>
		<caption>Imóveis</caption>
		<tbody>
			<tr>
				<td>id</td>
				<td>tipo</td>
				<td>tipologia</td>
				<td>preço</td>
				<td>descrição</td>
				<td>cidade</td>
				<td>imagem</td>
			</tr>
		</tbody>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($consulta2)) { ?>
			<tr>
				<td><?php echo $row['idc']; ?></td>
				<td><?php echo $row['tipo']; ?></td>
				<td><?php echo $row['tipologia']; ?></td>
				<td><?php echo $row['preco']; ?></td>
				<td><?php echo $row['descricao']; ?></td>
				<td><?php echo $row['cidade_im']; ?></td>
				<td><img src="<?php echo $row['image']; ?>"></td>
			</tr>
		<?php  } ?>
		</tbody>
		
	</table>
</body>
</html>