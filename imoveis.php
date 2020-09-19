<?php 
include_once('dbFunction.php');

	$funObj = new dbFunction();  

	if(isset($_POST['logout'])){ 
		$funObj->logout();
	}	
	if(!($_SESSION)){  
		header("Location:index.php");  
	} 
       
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostels</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./styles/imoveis.css">
</head>
<body>
<div class="container" align="center">
	<div class="header" align="center">
		<div class="headerMenu" align="center">
				<a href="index.php"><img src="./assets/home_logo.png" alt="logo" style="width: 76px; height: 76px; margin-top: 8px; padding: 0; "/></a>
				<div class="menu">
					<nav>
						<ul>
							<?php $funObj->menuType2();?>
						</ul>
					</nav>
				</div>
		</div>
	</div>
		
	<div class="white-block">
		<div class="grid">
			<ul>
				<?php $funObj->imoveis(); ?>
			</ul>
			<br><br>
		</div>
	</div>
</div>      
</body>
</html>