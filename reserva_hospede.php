<?php 
    
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  

if($_POST['reserva']){  
    $nome = $_POST['nome'];  
    $dataNascimento = $_POST['data_nascimento'];  
    $nacionalidade = $_POST['nacionalidade'];  
	$nCont = $_POST['n_contribuinte'];  
	$reserva = $funObj->reservaHosp($nome, $dataNascimento, $nacionalidade, $nCont);  
        if($reserva){  
                echo "<script>alert('Hóspede adicionado')</script>"; 
                header("Location: reserva.php"); 
        }else{  
            echo "<script>alert('Hóspede não adicionado')</script>";  
        } 
}  

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Reserva</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/register.css">
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
            <div class="headImg">
                <img src="./assets/home_asset.jpg" alt="home_image" style="width: 1100px; height: 618.75; filter: blur(4px);
                box-sizing: border-box;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                mix-blend-mode: luminosity;
                border: 1px solid #000000;
                max-width: 1100px;" align="center"/>
                <div class="black-block">
                    <form action="" method="post" id="frmLogin" name="reserva">
                        <h2 class="form-titulo">Hóspede</h2><br>
                        <label>Nome</label><br>
                        <input type="text" name="nome" id="imp"><br><br>
                        <label align="left">Data de Nascimento</label><br>
                        <input type="date" name="data_nascimento" id="imp"><br><br>
                        <label align="left">Nacionalidade</label><br>
                        <input type="text" name="nacionalidade" id="imp"><br><br>
                        <label align="left">Nº de Contribuinte</label><br>
                        <input type="text" name="n_contribuinte" id="imp">
                        <input type="submit" name="reserva" value="Reserva" id="b1" class="b1" style="top:85%;">
                        <div class="error-message" style="color:lightgray;"><?php if(isset($message)) { echo $message; } ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>      
    </body>
    </html>