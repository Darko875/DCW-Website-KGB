<?php 
session_start();
?>
	////<?php 
	////include_once("connect.php");
	////$consult =  "SELECT * FROM imovel";
	////$consulta2 = mysqli_query($conn, $consult);
	/////?>

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
				<a href="#"><img src="./assets/home_logo.png" alt="logo" style="width: 76px; height: 76px; margin-top: 10px; padding: 0; "/></a>
				<div class="menu">
					<nav>
						<ul>
							<li><a href="#">Managers</a></li>
							<li><a href="#">Guests</a></li>
						</ul>
					</nav>
				</div>
		</div>
	</div>
		
	<div class="white-block">
		<div class="grid">
			<ul>
				<li>
					<img src="./assets/home_asset.jpg" alt="home_image" style="width: 500px; height: 200px; filter: blur(4px);
					box-sizing: border-box;
					box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
					mix-blend-mode: luminosity;
					border: 1px solid #000000;
					max-width: 1100px;" align="center"/>
					<strong>Imóvel</strong>
					<p>Detalhes</p>
				</li>
			</ul>
		</div>
	</div>
</div>      
</body>
</html>