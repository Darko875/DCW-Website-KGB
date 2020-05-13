<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Registo</title>
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
                    <form action="valida.php" method="post" id="frmLogin" >
                        <h2 class="form-titulo">Login</h2><br><br><br>
                        <label align="left">Email</label><br>
                        <input type="text" name="email" id="imp"><br>
                        <label align="left">Password</label><br>
                        <input type="password" name="password" id="imp"><br>
                        <label>Username</label><br>
                        <input type="text" name="username" id="imp">
                        <input type="submit" name="login" value="Sign In" id="b1" class="b1">
                        <div class="error-message" style="color:lightgray;"><?php if(isset($message)) { echo $message; } ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>      
    </body>
    </html>