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
                $_SESSION['uid'] = $user_data['uid'];  
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

        public function imoveisReserva(){
            $conn = $this->connect(); 
            $res = mysqli_query($conn,"SELECT * FROM imovel");
            ?>
            <?php while($dado = mysqli_fetch_assoc($res)) { ?>
                <option value= <?php echo $dado['idc']?>><?php echo $dado['tipo'], $dado['tipologia'] ?></option>
            <?php } ?>
            <?php
        }
        
        public function reservaRegister($dataEntrada, $dataSaida, $nPessoas, $hostel){
            $conn = $this->connect();
            $qrs = "SELECT * FROM reserva 
	        WHERE data_entrada >= '$dataEntrada'
	        AND data_saida <= '$dataSaida'
	        AND idc = $hostel";

            $res = mysqli_query($conn, $qrs);
            $no_rows = mysqli_num_rows($res);  
            
            if($no_rows === 0){
                $uid = $_SESSION['uid'];
                $hosp = mysqli_query($conn, "SELECT * FROM hospede WHERE nid = (SELECT max(nid) FROM hospede WHERE uid = $uid) ") or die(mysqli_error($conn));   
                $res = mysqli_fetch_assoc($hosp);
                $rows = mysqli_num_rows($hosp); 
                if($rows > 0){
                    $qr = mysqli_query($conn, "INSERT INTO reserva(data_entrada, data_saida, npessoas, uid, idc, nid) values('".$dataEntrada."','".$dataSaida."','".$nPessoas."', '".$uid."', '".$hostel."', '".$res['nid']."')") or die(mysqli_error($conn));
                    echo "<script>alert('Reserva Successful $rows $no_rows')</script>";
                    return $qr;
                }else{
                    echo "<script>alert('Reserva is shit')</script>";
                }
            }
            else {
                header("Location: imoveis.php");
            }
            
            
              
           
        }

        public function reservaHosp($nome, $dataNascimento, $nacionalidade, $nCont){
            $conn = $this->connect();
            $uid = $_SESSION['uid'];
            $qr = mysqli_query($conn, "INSERT INTO hospede(nome, data_nascimento, nacionalidade, n_cont, uid) values('".$nome."','".$dataNascimento."','".$nacionalidade."', '".$nCont."', '".$uid."')") or die(mysqli_error($conn));  
            return $qr;  
           
        }
        
        
    }  
?>  