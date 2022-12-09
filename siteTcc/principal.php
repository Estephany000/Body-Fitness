<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        echo "<script>window.location = 'dashboard.php'</script>";
    }
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Sistema de acesso</title>
        <link rel="stylesheet" type="text/css" href="style/acesso.css" />
        <link rel="stylesheet" type="text/css" href="style/dashboard.css" />



        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
    </head>
    <body>
    <header>
            <div id="content">
               
                <span class="logo">Sistema de acesso</span>
                <div id="logout">
                    <a href="index.php"><button>Página Home</button></a>
                </div>
            </div>
        </header>


        <div id="mensagem"></div>

        <div id="formulario">
            <form id="formularioLogin">
                <span class="title">Login</span>

                <div id="linha">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>

                <div id="linha">
                    <label for="senha">Senha</label>
                    <input type="md5" name="senha" id="senha" />
                </div>

                <div id="button">
                    <button id="btnEntrar">Entrar</button>
                </div>
            </form>

            <form id="formularioCadastro">
                <span class="title">Crie sua conta</span>

                <div id="linha">
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" name="nomeCadastro" id="nomeCadastro" />
                </div>

                <div id="linha">
                    <label for="emailCadastro">Email</label>
                    <input type="text" name="emailCadastro" id="emailCadastro" />
                </div>

                <div id="linha">
                    <label for="senhaCadastro">Senha</label>
                    <input type="md5" name="senhaCadastro" id="senhaCadastro" />
                </div>

                <div id="button">
                    <button id="btnCadastrar">Cadastrar</button>
                </div>
            </form>

            <div id="textoCadastro">
                <span class="title">Não possui uma conta?</span>
                <span class="subtitle">Crie uma conta agora mesmo, e fique por dentro das nossas novidades. </span>
                <button id="btnCadastro" class="change">Cadastrar</button>
            </div>

            <div id="textoLogin">
                <span class="title">Já possui uma conta?</span>
                <span class="subtitle">Que ótimo!!</span>
                <button id="btnLogin" class="change">Entrar</button>
            </div>
        </div>

    </body>
</html>