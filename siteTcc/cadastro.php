<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Formulário de cadastro.</title>
</head>

<body>

<form method="POST">

        <div class="form">
            <form action="cadastro.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label> 
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required maxlength="30">
                    </div>

                    <div class="input-box">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="telefone" name="telefone" placeholder="Digite seu Telefone" required maxlength="30">
                    </div>


                
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required maxlength="30">
                    </div>

        

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required maxlength="32">
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                
                        <div class="login-button">
                            <button><a href="index.php">Entrar</a></button>
                        </div>
            </form>
        </div>
   
</body>

</html>