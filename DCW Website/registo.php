<!DOCTYPE html>
    <html>
    <head>
        <title>Formulário de Registo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main2.css">
    </head>
    <body>
        <div class="cabecalho">
            <div class="menu">
                <nav>
                    <ul>
                        <li id="vhs"><a href="index.html"><h1>KGB- Alojamento Local</h1></a></li>
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
        <form action="servicos" method="post" class="form-servicos" >
            <h2 class="form-titulo">Registo</h2>
            <div class="input">Crie a sua conta</div>
            <input type="text" name="utilizador" placeholder="Crie o seu utilizador">
            <input type="text" name="email" placeholder="Insira o seu email">
            <input type="text" name="palavrapasse" placeholder="Insira uma palavra passe">
            <input type="text" name="confirmarpalavrapasse" placeholder="Confirmar a sua Palavra Passe">
            <div class="login" align="left"><a href="login.html"><p>Já tem conta?</p></a></div>
            <input type="button" value="Enviar" id="botao">
        </form>
        
    </body>
    </html>