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
	<link rel="stylesheet" href="">
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
                    <li><a href="index.html">Home</a></li><!--
                 --><li><a href="index.html#901">Serviços</a></li><!--
                 --><li><a href="index.html#902">Perfil</a></li><!--
                 --><li><a href="index.html#903">Ofertas</a></li><!--
                 --><li><a href="index.html#904">Informações</a></li><!--
                 --><li><a href="login.php">Entrar</a></li>
                </ul>
            </nav>
        </div>
    </div>
	<div class="icon1" align="center"><i class="fas fa-user-circle"></i></div>
	<div>
		<h4><?php echo "Utilizador: ". $_SESSION['usernome'];?></h4>
		<h4><?php echo "Data de Nascimento: ". $_SESSION['userdata_nascimento'];?></h4>
		<h4><?php echo "Nacionalidade: ". $_SESSION['usernacionalidade'];?></h4>
		<h4><?php echo "Cidade: ". $_SESSION['usernacionalidade'];?></h4>
		<h4><?php echo "E-mail: ". $_SESSION['useremail'];?></h4>
		<h4><?php echo "Nº de Contribuinte ou Passaporte: ". $_SESSION['usern_cont'];?></h4>
	</div>
	<div class="historico">
		<table>
		<caption>Histórico de Reservas</caption>
		<tbody>
			<tr>
				<td>Código da reserva</td>
				<td>data de entrada</td>
				<td>data de saída</td>
				<td>número de pessoas</td>
				<td>Código do Imóvel</td>
			</tr>
		</tbody>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($consulta5)) { ?>
			<tr>
				<td><?php echo $row['idf']; ?></td>
				<td><?php echo $row['data_entrada']; ?></td>
				<td><?php echo $row['data_saida']; ?></td>
				<td><?php echo $row['npessoas']; ?></td>
				<td><?php echo $row['idc']; ?></td>
			</tr>
		<?php  } ?>
		</tbody>
	</div>
	<div class="logout">
		<a href="logout.php"> Logout </a>  
	</div>
</html>