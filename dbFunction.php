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
					<strong><?php echo $dado['tipo'], " ", $dado['tipologia'], " ", $dado['cidade_im'] ?></strong>
					<p><a href="imoveis_details.php?id=<?php echo $dado['idc'] ?>" >Detalhes</a></p>
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
        
        public function resPage(){
            $conn = $this->connect();
            $uid = $_SESSION['uid'];
            $qr = mysqli_query($conn, "SELECT r.idf, r.data_entrada, r.data_saida, r.npessoas, h.nome, i.cidade_im, i.tipo, i.tipologia FROM reserva r, hospede h, imovel i WHERE r.nid = h.nid AND r.idc = i.idc AND r.uid = $uid") or die(mysqli_error($conn));  
            
            ?>
            <?php while($dado = mysqli_fetch_assoc($qr)) { ?>
                <tr>
                    <td><?php echo $dado['idf'] ?></td>
                    <td><?php echo $dado['data_entrada'] ?></td>
                    <td><?php echo $dado['data_saida'] ?></td>
                    <td><?php echo $dado['npessoas'] ?></td>
                    <td><?php echo $dado['nome'] ?></td>
                    <td><?php echo $dado['tipo'], $dado['tipologia'], $dado['cidade_im'] ?></td>
                    <td><a href="reserva_details.php?id=<?php echo $dado['idf'] ?>" >Detalhes</a></td>
                    <td><a href="reserva_details.php?id=<?php echo $dado['idf'] ?>" >Remover</a></td>
                </tr>
            <?php } ?>
            <?php
        }
        public function resHosp(){
            if($_GET['id']){
                $conn = $this->connect();
                $uid = $_SESSION['uid'];
                $idf = $_GET['id'];
                $hosp = mysqli_query($conn, "SELECT h.nome, h.data_nascimento, h.nacionalidade, h.n_cont FROM hospede h, reserva r WHERE idf = $idf AND r.uid = h.uid AND r.nid = h.nid ") or die(mysqli_error($conn));
        
                ?>
                <?php while($dado = mysqli_fetch_assoc($hosp)) { ?>
                    <tr>
                        <td><?php echo $dado['nome'] ?></td>
                        <td><?php echo $dado['data_nascimento'] ?></td>
                        <td><?php echo $dado['nacionalidade'] ?></td>
                        <td><?php echo $dado['n_cont'] ?></td>
                    </tr>
                <?php } ?>
                <?php
            }else{
                echo "<script>alert('Servidor não disponivel!')</script>";
            }
        }
        public function resImv(){
            if($_GET['id']){
                $conn = $this->connect();
                $uid = $_SESSION['uid'];
                $idf = $_GET['id'];
                $imv = mysqli_query($conn, "SELECT i.tipo, i.tipologia, i.cidade_im, i.image, i.idc FROM imovel i, reserva r WHERE idf = $idf AND r.idc = i.idc ") or die(mysqli_error($conn));
                

                ?>
                <?php while($dado = mysqli_fetch_assoc($imv)) { ?>
                    <tr>
                        <td><img src=<?php echo $dado['image'] ?> alt="home_image" style="width: 280px; height: 200px; 
					max-width: 1100px;" align="center"/></td>
                        <td><?php echo $dado['tipo'] ?></td>
                        <td><?php echo $dado['tipologia'] ?></td>
                        <td><?php echo $dado['cidade_im'] ?></td>
                           
                    </tr>
                <?php } ?>
                <?php
            }else{
                echo "<script>alert('Servidor não disponivel!')</script>";
            }
        }
        public function resDetails(){
            if($_GET['id']){
                $conn = $this->connect();
                $uid = $_SESSION['uid'];
                $idf = $_GET['id'];
                $qr = mysqli_query($conn, "SELECT idf, data_entrada, data_saida, npessoas  FROM reserva WHERE idf = $idf ") or die(mysqli_error($conn));

                ?>
                <?php while($dado = mysqli_fetch_assoc($qr)) { ?>
                    <tr>
                        <td><?php echo $dado['idf'] ?></td>
                        <td><?php echo $dado['data_entrada'] ?></td>
                        <td><?php echo $dado['data_saida'] ?></td>
                        <td><?php echo $dado['npessoas'] ?></td>
                    </tr>
                <?php } ?>
                <?php
            }else{
                echo "<script>alert('Servidor não disponivel!')</script>";
            }
        }

        public function imvDetails(){
            if($_GET['id']){
                $conn = $this->connect();
                $idc = $_GET['id'];
                $imv = mysqli_query($conn, "SELECT * FROM imovel WHERE idc = $idc ") or die(mysqli_error($conn));
                

                ?>
                <?php while($dado = mysqli_fetch_assoc($imv)) { ?>
                    <tr>
                        <td><img src=<?php echo $dado['image'] ?> alt="home_image" style="width: 280px; height: 200px; 
					max-width: 1100px;" align="center"/></td>
                        <td><?php echo $dado['tipo'] ?></td>
                        <td><?php echo $dado['tipologia'] ?></td>
                        <td><?php echo $dado['cidade_im'] ?></td>
                        <td><?php echo $dado['descricao'] ?></td>
                        <td><?php echo $dado['preco'] ?></td>
                           
                    </tr>
                <?php } ?>
                <?php
            }else{
                echo "<script>alert('Servidor não disponivel!')</script>";
            }        
        }
    }  
?>  