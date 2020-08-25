<?php
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  
    if(isset($_POST['login'])){  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $user = $funObj->Login($email, $password);  
        if ($user) {  
            // Login Success  
           header("location:imoveis.php");  
        } else {  
            // Login Failed  
            echo "<script>alert('Email / Password Not Match')</script>";  
        }  
    }  
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./styles/login.css">
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
                    <form action="" method="post" id="frmLogin" name="login">
                        <h2 class="form-titulo">Login</h2><br><br><br>
                        <label align="left">Email</label><br><br>
                        <input type="text" name="email" id="imp"><br><br>
                        <label align="left">Password</label><br><br>
                        <input type="password" name="password" id="imp">
                        <input type="submit" name="login" value="Sign In" id="b1" class="b1">
                    </form>
                </div>
            </div>
        </div>
    </div>      
</body>
</html>