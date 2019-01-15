<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main1.css">
    </head>
    <body>
        <div class="cabecalho">
            <div class="menu" align="center">
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
        <form action="valida.php" method="post" id="frmLogin" >
            <h2 class="form-titulo">Login</h2>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login" id="botao">
        </form>
                    
                
    </body>
    </html>