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
	<title>Detalhes do Hostel</title>
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
                            <?php $funObj->menuType2();?>
						</ul>
					</nav>
				</div>
		</div>
	</div>
		
	<div class="white-block">
		<div class="black-block">
            <ul>
                <br><br><br>
                <?php $funObj->imvDetails(); ?>
            </ul>
		</div>
	</div>
</div>      
</body>
</html>