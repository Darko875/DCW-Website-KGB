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
					<p style="text-align: center;" align="center"><a href="imoveis_details.php?id=<?php echo $dado['idc'] ?>" align="center" >Detalhes</a></p>
				</li>
			<?php } ?>
            <?php
        }

        public function userName(){
               ?> 
            <li>Bem vindo, <?php echo $_SESSION['username'] ?></li>
            <?php
        }

        public function menuType1(){
            ?>
                <li><a href="#124">Guests</a></li>
                <li><a href="#123">Services</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            <?php
            
        }

        public function menuTypeL1(){
            ?>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            <?php
            
        }

        public function menuType2(){
            $user = $this->userName();
            ?>
                <?php echo $user ?>
                <li><a href="reserva_display.php">Reservas</a></li>
                <li><a href="reserva_hospede.php">Crie uma Reserva</a></li>
                <li><form method="post"><input type="submit" name="logout" value="Logout" ></form></li>
            <?php
            
        }

        public function menuType3(){
            $user = $this->userName();
            ?>
                <?php echo $user ?>
                <li><a href="imoveis.php">Hostels</a></li>
                <li><a href="reserva_hospede.php">Crie uma Reserva</a></li>
                <li><form method="post"><input type="submit" name="logout" value="Logout" ></form></li>
            <?php
            
        }

        public function menuType4(){
            $user = $this->userName();
            ?>
                <?php echo $user ?>
                <li><a href="imoveis.php">Hostels</a></li>
                <li><a href="reserva_display.php">Reservas</a></li>
                <li><form method="post"><input type="submit" name="logout" value="Logout" style="background-color: #000000;/* Green */
                    border: none;
                    color: #FFFFFF;
                    text-align: center;
                    text-decoration: none;
                    display: flex;
                    font-size: 20px;"></form></li>
            <?php
            
        }

        public function menuType5(){
            $user = $this->userName();
            ?>
                <?php echo $user ?>
                <li><a href="imoveis.php">Hostels</a></li>
                <li><a href="reserva_hospede.php">Crie uma Reserva</a></li>
                <li><form method="post"><input type="submit" name="logout" value="Logout" ></form></li>
            <?php
            
        }

        public function logout(){
            
                // remove all session variables  
                session_unset();   
          
                // destroy the session   
                session_destroy();  

                header("Location:index.php");
        }

        public function imoveisReserva(){
            $conn = $this->connect(); 
            $res = mysqli_query($conn,"SELECT * FROM imovel");
            ?>
            <?php while($dado = mysqli_fetch_assoc($res)) { ?>
                <option value= <?php echo $dado['idc']?>><?php echo $dado['cidade_im'] ?></option>
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
                    header("Location: reserva_display.php");
                    return $qr;
                }else{
                    header("Location: imoveis.php");
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
                    <td><?php echo $dado['cidade_im'] ?></td>
                    <td><a href="reserva_details.php?id=<?php echo $dado['idf'] ?>" >Detalhes</a></td>
                    <td><a href="reserva_display.php?idr=<?php echo $dado['idf'] ?>" >Remover</a></td>
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
                    <li class="ilset">
                        <span class="detalheTitulo">Nome do Hóspede</span><span class="detalheTitulo2"><?php echo $dado['nome'] ?></span><br>
                    </li> 
                    <li class="ilset black-list">   
                        <span class="detalheTitulo">Data de Nascimento</span><span class="detalheTitulo2"><?php echo $dado['data_nascimento'] ?></span><br>
                    </li>    
                    <li class="ilset">
                        <span class="detalheTitulo">Nacionalidade</span><span class="detalheTitulo2"><?php echo $dado['nacionalidade'] ?></span><br>
                    </li>
                    <li class="ilset black-list">    
                        <span class="detalheTitulo">Nº de Contribuinte</span><span class="detalheTitulo2"><?php echo $dado['n_cont'] ?></span><br>
                    </li>
                <?php } ?>
                <?php
            }else{
                header("location:reserva_display.php");
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
                    <br><br>
                    <li class="img-block" align="center">
                        <br>
                        <span><img src=<?php echo $dado['image'] ?> alt="home_image" style="width: 800px; height: 235px; 
                    max-width: 1100px;" align="center"/></span><br><br>
                        <h2 align="center" style="color: #FFFF ">Detalhes da Reserva</h2>
                    </li><br><br>
                    <h3>Dados do Hostel</h3>
                    <br><br>
                    <li class="ilset">
                        <span class="detalheTitulo">Tipo de Hostel</span><span class="detalheTitulo2"><?php echo $dado['tipo'] ?></span><br>
                    </li>
                    <li class="ilset black-list">    
                        <span class="detalheTitulo">Tipologia</span><span class="detalheTitulo2"><?php echo $dado['tipologia'] ?></span><br>
                    </li>
                    <li class="ilset">    
                        <span class="detalheTitulo">Cidade</span><span class="detalheTitulo2"><?php echo $dado['cidade_im'] ?></span><br>       
                    </li>
                <?php } ?>
                <?php
            }else{
                header('reserva_display.php');
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
                    <li class="ilset black-list">
                        <span class="detalheTitulo">Código da Reserva</span><span class="detalheTitulo2"><?php echo $dado['idf'] ?></span><br>
                    </li>
                    <li class="ilset">            
                        <span class="detalheTitulo">Data de Entrada</span><span class="detalheTitulo2"><?php echo $dado['data_entrada'] ?></span><br>
                    </li>    
                    <li class="ilset black-list">        
                        <span class="detalheTitulo">Data de Saída</span><span class="detalheTitulo2"><?php echo $dado['data_saida'] ?></span><br>
                    </li>
                    <li class="ilset">
                        <span class="detalheTitulo">Nº de Pessoas</span><span class="detalheTitulo2"><?php echo $dado['npessoas'] ?></span><br>
                    </li>
                <?php } ?>
                <?php
            }else{
                header("location:reserva_display.php");
            }
        }

        public function imvDetails(){
            if($_GET['id']){
                $conn = $this->connect();
                $idc = $_GET['id'];
                $imv = mysqli_query($conn, "SELECT * FROM imovel WHERE idc = $idc ") or die(mysqli_error($conn));
                

                ?>
                <?php while($dado = mysqli_fetch_assoc($imv)) { ?>
                    <li class="img-block" align="center" style="height: 400px">
                        <br>
                        <span><img src=<?php echo $dado['image'] ?> alt="home_image" style="width: 800px; height: 300px; 
                    max-width: 1100px;" align="center"/></span><br><br>
                        <h2 align="center" style="color: #FFFF "><?php echo $dado['cidade_im'] ?></h2>
                    </li>
                    <br><br>
                    <li class="ilset">
                        <span class="detalheTitulo">Tipo de Hostel</span><span class="detalheTitulo2"><?php echo $dado['tipo'] ?></span><br>
                    </li>
                    <br><br>
                    <li class="ilset black-list">    
                        <span class="detalheTitulo">Tipologia</span><span class="detalheTitulo2"><?php echo $dado['tipologia'] ?></span><br>
                    </li>
                    <br><br>
                    <li class="ilset">    
                        <span class="detalheTitulo">Cidade</span><span class="detalheTitulo2"><?php echo $dado['cidade_im'] ?></span><br>       
                    </li>
                    <br><br>
                    <li class="ilset black-list">
                        <span class="detalheTitulo">Descrição</span><span class="detalheTitulo2"><?php echo $dado['descricao'] ?></span><br>
                    </li>   
                    <br><br> 
                    <li class="ilset">    
                        <span class="detalheTitulo">Preço</span><span class="detalheTitulo2"><?php echo $dado['preco'] ?>€</span><br>
                    </li>
                <?php } ?>
                <?php
            }else{
                echo "<script>alert('Servidor não disponivel!')</script>";
            }        
        }

        public function imvRmv(){
            if(isset($_GET['idr'])){
                $conn = $this->connect();
                $uid = $_SESSION['uid'];
                $idf = $_GET['idr'];
                $imv = mysqli_query($conn, " DELETE FROM `reserva` WHERE idf = $idf ") or die(mysqli_error($conn));

                echo "<scrpit> alert('$idr $uid') </scrpit>";
            }
            else
            {
                header("location: reserva_display.php");
            } 
        }
    }  
?>  