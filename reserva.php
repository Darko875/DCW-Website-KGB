<?php 
    
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  

if(isset($_POST['reserva'])){  
	$dataEntrada = $_POST['data_entrada'];  
    $dataSaida = $_POST['data_saida'];  
    $nPessoas = $_POST['npessoas'];  
	$hostel = $_POST['hostel'];  
	$reserva = $funObj->reservaRegister($dataEntrada, $dataSaida, $nPessoas, $hostel);  
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
        <title>Reserva do Hostel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/register.css">
    </head>
    <body>
    <div class="container" align="center">
        <div class="header" align="center">
            <div class="headerMenu" align="center">
                    <a href="index.php"><img src="./assets/home_logo.png" alt="logo" style="width: 76px; height: 76px; margin-top: 10px; padding: 0; "/></a>
                    <div class="menu">
                        <nav>
                            <ul>
								<?php $funObj->menuType4();?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="headImg">
                <img src="./assets/home_asset.jpg" alt="home_image" style="width: 1100px; height: 618.75; filter: blur(4px);
                box-sizing: border-box;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                mix-blend-mode: luminosity;
                border: 1px solid #000000;
                max-width: 1100px;" align="center"/>
                <div class="black-block">
                    <form action="" method="post" id="frmLogin" name="reserva">
                        <h2 class="form-titulo">Reserva</h2><br>
                        <label>Data de Entrada</label><br>
                        <input type="date" name="data_entrada" id="imp"><br><br>
                        <label align="left">Data de Saída</label><br>
                        <input type="date" name="data_saida" id="imp"><br><br>
                        <label align="left">Nº de pessoas</label><br>
                        <input type="number" name="npessoas" id="imp"><br><br>
                        <label align="left">Hostel</label><br>
                        <select name="hostel" id="imp">
						<?php $funObj->imoveisReserva(); ?>
						</select> <br>
                        <input type="submit" name="reserva" value="Reserva" id="b1" class="b1" style="top:85%;">
                    </form>
                </div>
            </div>
        </div>
    </div>      
    </body>
    </html>