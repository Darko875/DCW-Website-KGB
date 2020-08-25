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
        public function UserRegister($user, $email, $password){
                $conn = mysqli_connect(server, user, password, db);   
                $password = md5($password);  
                $qr = mysqli_query($conn, "INSERT INTO user(user, email, password) values('".$user."','".$email."','".$password."')") or die(mysqli_error($conn));  
                return $qr;  
               
        }  
        public function Login($email, $password){  
            $conn = mysqli_connect(server, user, password, db); 
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
        
    }  
?>  