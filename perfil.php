<?php 
session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perfil</title>
	<link rel="stylesheet" href="main3.css">
	<link rel="stylesheet" href="main5.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<?php 
		include_once("connect.php");
		$consult1 =  "SELECT * FROM reserva where nid = '" . $_SESSION["nid"] . "'";
		$consulta5 = mysqli_query($conn, $consult1);
	?>
	<div class="cabecalho">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li><!--
                 --><li><a href="index.php#901">Serviços</a></li><!--
                 --><li><a href="index.php#903">Ofertas</a></li><!--
                 --><li><a href="index.php#904">Informações</a></li>
                </ul>
            </nav>
        </div>
    </div>
	<div class="icon1" align="center" style="font-size: 120px;
    color: orange;"><i class="fas fa-user-circle"></i></div>
	<div align="center" style="color:lightgray;">
		<h4><?php echo "Utilizador: <br><br>". $_SESSION['usernome'];?></h4>
		<h4><?php echo "Data de Nascimento: <br><br>". $_SESSION['userdata_nascimento'];?></h4>
		<h4><?php echo "Nacionalidade: <br><br>". $_SESSION['usernacionalidade'];?></h4>
		<h4><?php echo "Cidade: <br><br>". $_SESSION['usernacionalidade'];?></h4>
		<h4><?php echo "E-mail: <br><br>". $_SESSION['useremail'];?></h4>
		<h4><?php echo "Nº de Contribuinte ou Passaporte: <br><br>". $_SESSION['usern_cont'];?></h4>
	</div>
	<div class="historico">
		<table align="center" style="border-spacing: 5px; border: 2px solid lightgray; border-collapse: collapse;">
		<caption style="color:lightgray;">Histórico de Reservas</caption>
		<tbody style="color:lightgray;" align="center">
			<tr>
				<td>Código da Reserva</td>
				<td>Data de Entrada</td>
				<td>Data de Saída</td>
				<td>Número de Pessoas</td>
				<td>Código do Imóvel</td>
			</tr>
		</tbody>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($consulta5)) { ?>
			<tr style="padding: 15px;">
				<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idf']; ?></td>
				<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
				<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['npessoas']; ?></td>
				<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
			</tr>
		<?php  } ?>
		</tbody>
	</div>
	<div class="logout">
		<a href="logout.php"><button type="button" href=# class="css3button">Logout</button></a>  
		<a href="imoveis.php"><button type="button" href=# class="css3button">Imóveis</button></a>
		<a href="reserva.php"><button type="button" href=# class="css3button">Reservas</button></a>
	</div>
</html>