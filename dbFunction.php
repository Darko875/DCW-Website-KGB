<?php  
require_once 'connect.php'; 
require_once 'config.php'; 
session_start();  
    class dbFunction {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();;   
        }  
        // destructor  
        function __destruct() {  
              
        }  

        public function connect(){
            $con = mysqli_connect(server, user, password, db);
            return $con;
        }

        public function UserRegister($user, $email, $password){
                $conn = $this->connect();  
                $password = md5($password);  
                $qr = mysqli_query($conn, "INSERT INTO user(user, email, password) values('".$user."','".$email."','".$password."')") or die(mysqli_error($conn));  
                return $qr;  
               
        }  
        public function Login($email, $password){  
            $conn = $this->connect(); 
            $res = mysqli_query($conn,"SELECT * FROM user WHERE email = '".$email."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['uid'] = $user_data['id'];  
                $_SESSION['username'] = $user_data['user'];  
                $_SESSION['email'] = $user_data['email'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
        }  

        public function imoveis(){
            $conn = $this->connect(); 
            $res = mysqli_query($conn,"SELECT * FROM imovel"); 
            ?>
            <?php while($dado = mysqli_fetch_assoc($res)) { ?>
				<li>
					<img src=<?php echo $dado['image'] ?> alt="home_image" style="width: 280px; height: 200px; 
					max-width: 1100px;" align="center"/>
					<strong><?php echo $dado['tipo'], $dado['tipologia'] ?></strong>
					<p>Detalhes</p>
				</li>
			<?php } ?>
            <?php
        }

        public function userName(){
               ?> 
            <li>Bem vindo, <?php echo $_SESSION['username'] ?></li>
            <?php
        }
    }  
?>  