<?php 
$msg= 0;
@$msg= $_REQUEST['msg'];
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Serviços</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main3.css">
    </head>
    <body>
        <div class="cabecalho">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li><!--
                     --><li><a href="index.php#901">Serviços</a></li><!--
                     --><li><a href="index.php#902">Perfil</a></li><!--
                     --><li><a href="index.php#903">Ofertas</a></li><!--
                     --><li><a href="index.php#904">Informações</a></li><!--
                     --><li><a href="login.php">Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <form action="processa2.php" method="post" class="form-servicos" >
            <h2 class="form-titulo">Serviços</h2>
            <?php if($msg==@enviado){
                echo "<h3>Mensagem enviada, agradecemos o seu pedido.</h3>";
             } else {} ?>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <div class="bloco" align="left">
                <label for="exampleInputEmail1">Serviço:</label>
                <select name="mensagem" class="form-control">
                    <option value="Check-in">Check-in</option>
                    <option value="Limpeza e Manutenção">Limpeza e Manutenção</option>
                    <option value="Consultoria e Decoração">Consultoria e Decoração</option>
                </select>
            </div>
            <input type="submit" value="Enviar" id="botao">
        </form>
        
    </body>
</html>
