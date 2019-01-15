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
            <h2 class="form-titulo">Serviços</h2>
            <div class="input" align="center">Solicitação de Serviços</div>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <div class="bloco" align="left">
                <label for="exampleInputEmail1">Serviço:</label>
                <select class="form-control">
                    <option value="145">Check-in</option>
                    <option value="146">Limpeza e Manutenção</option>
                    <option value="147">Consultoria e Decoração</option>
                </select>
            </div>
            <input type="button" value="Enviar" id="botao">
        </form>
        
    </body>
    </html>
