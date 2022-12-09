<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style/dashboard.css" />
    </head>
    <body>
      
    
        <div id="content">
        <div id="tabelaUsuarios">

            <span class="title">Cadastro de produtos</span>
            <form action="cadastramento.php" method="post" enctype="multipart/form-data">
              <table>
                <thead>
                 <tr>
              <td><label>Nome: </label><input type="text" name="nome" id="nome"></td>
               <td> <label>Descrição: </label><input type="text" name="desc" id="desc"></td>
                <td><label>Preço: </label><input type="text" name="preco" id="preco"></td>
                <td><label>Foto</label><input type="file" name="imagem" id="imagem"></td>
               <td> <button type="submit">Enviar</button></td>
            </form></br></br></tr></thead></table><br> <br><br>

            <span class="title">Atualização de produtos cadastrados</span>
            <form action="atualizamento.php" method="post" enctype="multipart/form-data">

            <table>
                <thead>
                 <tr>

                <td><label>Id Produto: </label><input type="number" name="id" id="id"></td>
                <td><label>Nome: </label><input type="text" name="nome" id="nome"></td>
                <td><label>Preco: </label><input type="text" name="preco" id="preco"></td>
               <td> <label>Descrição: </label><input  type="text" name="desc" id="desc"></td>
              </thead></table>
                <br> 

                <br><br>
            <table>
                <thead>
                 <tr>
                 <td><label>Foto<br><br></label><input type="file" name="imagem" id="imagem"></td>
                <td><button type="submit" id="update" value="update" name="update">Atualizar</button></td>
                <td><button type="submit" id="deletar" value="deletar" name="deletar">Deletar</button></td></tr></thead></table>
            </form>
        </div>
    </body>
</html>

