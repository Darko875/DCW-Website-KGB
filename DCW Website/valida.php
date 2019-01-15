<?php
            session_start();
            $conn = mysqli_connect("localhost","darko","darko","sistreserva");
    
            $message="";
            if(!empty($_POST["login"])) {
                $result = mysqli_query($conn,"SELECT * FROM hospede WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
                $row  = mysqli_fetch_array($result);
                if(is_array($row)) {
                $_SESSION["nid"] = $row['nid'];
                $_SESSION['msg'] = "Utilizador entrou com sucesso";
                $_SESSION['userid'] = $row['nid'];
            	$_SESSION['usernome'] = $row['nome'];
            	$_SESSION['userdata_nascimento'] = $row['data_nascimento'];
            	$_SESSION['usernacionalidade'] = $row['nacionalidade'];
            	$_SESSION['usercidade'] = $row['cidade'];
            	$_SESSION['useremail'] = $row['email'];
            	$_SESSION['usern_cont'] = $row['n_cont'];
                header("Location: perfil.php");
                } else {
                $message = "Invalid email or Password!";
                header("Location: login.php");
                }
            }
  
?>