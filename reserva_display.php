<?php 
include_once('dbFunction.php');

	$funObj = new dbFunction();  

	if(isset($_GET['idr'])){
        $funObj->imvRmv(); 
        header("location:reserva_display.php");
    }else{
        
        
    }      

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
	<title>Reservas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./styles/stylesheet.css">
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
		
	<div class="white-block">
		<div class="black-block">
            <h2>Reservas</h2>
            <table>
                <tr>
                    <th class="black-list">Nº de Reserva</th>
                    <th class="black-list">Data de Entrada</th>
                    <th class="black-list">Data de Saída</th>
                    <th class="black-list">Nº de Pessoas</th>
                    <th class="black-list">Hóspede Responsável</th>
                    <th class="black-list">Hostel</th>
                </tr>
                <?php $funObj->resPage(); ?>
            </table>
		</div>
	</div>
</div>      
</body>
</html>