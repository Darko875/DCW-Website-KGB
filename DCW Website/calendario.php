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
	$consult12 =  "SELECT * FROM reserva WHERE idc= 1";
        $consult13 =  "SELECT * FROM reserva WHERE idc= 2";
        $consult14 =  "SELECT * FROM reserva WHERE idc= 3";
        $consult15 =  "SELECT * FROM reserva WHERE idc= 4";
        $consult16 =  "SELECT * FROM reserva WHERE idc= 5";
        $consult17 =  "SELECT * FROM reserva WHERE idc= 6";
        $consult18 =  "SELECT * FROM reserva WHERE idc= 7";
        $consult19 =  "SELECT * FROM reserva WHERE idc= 8";
        $consult20 =  "SELECT * FROM reserva WHERE idc= 9";
        $consult21 =  "SELECT * FROM reserva WHERE idc= 10";
        $consult22 =  "SELECT * FROM reserva WHERE idc= 11";
        $consult23 =  "SELECT * FROM reserva WHERE idc= 12";
        $consult24 =  "SELECT * FROM reserva WHERE idc= 13";
        $consult25 =  "SELECT * FROM reserva WHERE idc= 14";
        $consult26 =  "SELECT * FROM reserva WHERE idc= 15";
	$consulta2 = mysqli_query($conn, $consult12);
        $consulta3 = mysqli_query($conn, $consult13);
        $consulta4 = mysqli_query($conn, $consult14);
        $consulta5 = mysqli_query($conn, $consult15);
        $consulta6 = mysqli_query($conn, $consult16);
        $consulta7 = mysqli_query($conn, $consult17);
        $consulta8 = mysqli_query($conn, $consult18);
        $consulta9 = mysqli_query($conn, $consult19);
        $consulta10 = mysqli_query($conn, $consult20);
        $consulta11 = mysqli_query($conn, $consult21);
        $consulta12 = mysqli_query($conn, $consult22);
        $consulta13 = mysqli_query($conn, $consult23);
        $consulta14 = mysqli_query($conn, $consult24);
        $consulta15 = mysqli_query($conn, $consult25);
        $consulta16 = mysqli_query($conn, $consult26);
	?>
	<link rel="stylesheet" href="main3.css">
</head>
<body>
	<div class="cabecalho">
        <div class="menu">
            <na>
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
			<caption style="color:lightgray;" align="center">Reservas de Imóveis</caption>
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
                                <?php while($row = mysqli_fetch_assoc($consulta3)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta4)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta5)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta6)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta7)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta8)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta9)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta10)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta11)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta12)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta13)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta14)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta15)) { ?>
				<tr style="padding: 15px;">
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['idc']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_entrada']; ?></td>
					<td style="color:lightgray; padding: 15px; border: 1px solid"><?php echo $row['data_saida']; ?></td>
				</tr>
                                <?php  } ?>
                                <?php while($row = mysqli_fetch_assoc($consulta16)) { ?>
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