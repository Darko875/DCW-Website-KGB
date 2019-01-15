<?php session_start(); ?>
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
        <form action="processa.php" method="post" class="frmregisto" >
            <h2 class="form-titulo">Registo</h2>
            <?php 
            if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']); 
            }
            ?>
            <div class="input">Crie a sua conta</div>
            <input type="text" name="nome" placeholder="Crie o seu utilizador">
            <input type="date" name="data_nascimento" placeholder="Insira a sua data de nascimento">
            <input type="text" name="nacionalidade" placeholder="Insira a sua nacionalidade">
            <input type="text" name="cidade" placeholder="Insira a sua cidade">
            <input type="text" name="email" placeholder="Insira o seu email">
            <input type="text" name="n_cont" placeholder="Insira o seu contribuinte">
            <input type="text" name="password" placeholder="Insira uma palavra passe">
            <div class="login" align="left"><a href="login.html"><p>Já tem conta?</p></a></div>
            <input type="submit" value="Enviar" id="botao">
        </form>
    </body>
    </html>