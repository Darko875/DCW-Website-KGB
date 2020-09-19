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
	<title>Detalhes da Reserva</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./styles/stylesheet2.css">
</head>
<body>
<div class="container" align="center">
	<div class="header" align="center">
		<div class="headerMenu" align="center">
				<a href="index.php"><img src="./assets/home_logo.png" alt="logo" style="width: 76px; height: 76px; margin-top: 8px; padding: 0; "/></a>
				<div class="menu">
					<nav>
						<ul>
                            <?php $funObj->menuType5();?>
						</ul>
					</nav>
				</div>
		</div>
	</div>
		
	<div class="white-block" align="center">
		<div class="black-block" align="center">
            <ul align="center">
                <?php $funObj->resImv(); ?>
            </ul>  
            <ul align="center">    
                <br><br>
                <h3>Dados do Hóspede Responsável</h3>
                <br><br>
                <?php $funObj->resHosp(); ?>
            </ul>
            <ul align="center">  
                <br><br>  
                <h3>Dados da Marcação</h3>
                <br><br>
                <?php $funObj->resDetails(); ?>
            </ul>
		</div>
	</div>
</div>      
</body>
</html>