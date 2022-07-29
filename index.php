<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Pessoas</title>
</head>
<body>
    <h1>CRUD Básico - Cadastro de Pessoas</h1>
    <h3>Cadastros no banco de dados:</h3><br>

    <!-- criando o form para cadastrar dados no banco-->
                
    <form action="inserir.php" method="POST" >
                    <td><input type="text" name="nomepessoas" placeholder="Nome"></td>
                    <td><input type="number" name="idadepessoas" placeholder="Idade"></td> 
                    <td><select id="generopessoas" name="generopessoas">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outros">Outros</option>
                        <option value="NaoInformar">Não Informar</option>
                    </select><td>
                    <td><select id="corpessoas" name="corpessoas">
                        <option value="Preto">Preto</option>
                        <option value="Branco">Branco</option>
                        <option value="Pardo">Pardo</option>
                        <option value="Amarelo">Amarelo</option>
                        <option value="Indio">Índio</option>
                    </select><td>
                    <td><input type="number" name="alturapessoas" min="0" max="3" step="0.01" placeholder="Altura"></td>
                    <td><input type="number" name="pesopessoas" placeholder="Peso"></td>
                    <td><input type="submit" value="Salvar Cadastro"></td>
                </form><br>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Gênero</th>
            <th scope="col">Cor</th>
            <th scope="col">Altura</th>
            <th scope="col">Peso</th>
        </tr>
    </thead>
    <?php
        //chamando a conexao com o banco 
        include "conexao.php";

        //buscando informações

        $valoresBanco = "SELECT * FROM pessoas";
        $resultadoBanco = mysqli_query($conn, $valoresBanco);
        $valoresArray = mysqli_num_rows($resultadoBanco);
    
        //verificando se os dados existem, se existirem vamos mostrar
    
        if($valoresArray > 0){
            while($dados = mysqli_fetch_array($resultadoBanco)){
                //mostrando dados dentro de uma tabela html
                
                $idpessoas = $dados['id_pessoas'];
                $nomepessoas = $dados['nome_pessoas'];
                $idadepessoas = $dados['idade_pessoas'];
                $generopessoas = $dados['genero_pessoas'];
                $corpessoas = $dados['cor_pessoas'];
                $alturapessoas = $dados['altura_pessoas'];
                $pesopessoas = $dados['peso_pessoas'];
                ?>
            
            <tbody>
                <th scope="row" class="table-dark"><?php echo $idpessoas ?></th>
                <form action="alterar.php" method="POST">
                    <td><input type="text" name="nomepessoas" value="<?php echo $nomepessoas ?>"></td>
                    <td ><input type="number" name="idadepessoas" value="<?php echo $idadepessoas ?>"></td>
                    <td><input type="text" name="generopessoas" value="<?php echo $generopessoas ?>"></td>
                    <td><input type="text" name="corpessoas" value="<?php echo $corpessoas ?>"></td>
                    <td><input type="number" name="alturapessoas" min="0" max="3" step="0.01" value="<?php echo $alturapessoas ?>"></td>
                    <td><input type="number" name="pesopessoas" value="<?php echo $pesopessoas ?>"></td>
                    <td class="">
                        <input type="hidden" name="idpessoas" value="<?php echo $idpessoas ?>">
                        <input type="submit" value="Salvar alteração">
                    </td>
                </form>
                    <td>
                        <form action="excluir.php" method="POST" >
                            <input type="hidden" name="idpessoas" value="<?php echo $idpessoas ?>">
                            <input type="submit" value="excluir"></td>
                        </form>
                    </td>
                </tr>   
                <?php } ?>   
            <?php } ?>   
            </table>
            </tbody>
</body>
</html>