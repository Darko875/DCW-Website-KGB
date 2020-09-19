<?php 
    
    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  

if($_POST['register']){  
    $username = $_POST['username'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $confirmPassword = $_POST['confirmPassword'];  
    if($password == $confirmPassword){   
        $register = $funObj->UserRegister($username, $email, $password);  
        if($register){  
                echo "<script>alert('Registration Successful')</script>";  
        }else{  
            echo "<script>alert('Registration Not Successful')</script>";  
        }  
    } else {  
        echo "<script>alert('Password Not Match')</script>";  
      
    }  
}  

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Registo de Utilizador</title>
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
                                <?php $funObj->menuTypeL1();?>
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
                    <form action="" method="post" id="frmLogin" name="register">
                        <h2 class="form-titulo">Register</h2><br>
                        <label>Username</label><br>
                        <input type="text" name="username" id="imp"><br><br>
                        <label align="left">Email</label><br>
                        <input type="email" name="email" id="imp"><br><br>
                        <label align="left">Password</label><br>
                        <input type="password" name="password" id="imp"><br><br>
                        <label align="left">Confirm Password</label><br>
                        <input type="password" name="confirmPassword" id="imp"><br>
                        <input type="submit" name="register" value="Sign Up" id="b1" class="b1" style="top:85%;">
                        <div class="error-message" style="color:lightgray;"><?php if(isset($message)) { echo $message; } ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>      
    </body>
    </html>