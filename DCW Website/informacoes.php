<?php 
@$msg= 0;
@$msg= $_REQUEST['msg'];
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Solicitação de Informações</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main4.css">
    </head>
    <body>
        <div class="cabecalho">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li><!--
                     --><li><a href="index.html#901">Serviços</a></li><!--
                     --><li><a href="index.html#902">Perfil</a></li><!--
                     --><li><a href="index.html#903">Ofertas</a></li><!--
                     --><li><a href="index.html#904">Informações</a></li><!--
                     --><li><a href="login.html">Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <form action="processa2.php" method="post" class="form-servicos" >
            <h2 class="form-titulo">Informações</h2>
            <?php if($msg==@enviado){
                echo "<h3>Mensagem enviada, agradecemos o seu pedido.</h3>";
             } else {} ?>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <textarea name="mensagem" placeholder="Escreva aqui a sua mensagem."></textarea>
            <input type="submit" value="Enviar" id="botao">
        </form>
        
    </body>
</html>