<?php
//incluindo conexao com banco
include "conexao.php";

//puxando os dados do forms e salvando nas variaveis

$nomepessoas  = $_POST['nomepessoas'];
$idadepessoas = $_POST['idadepessoas'];
$generopessoas = $_POST['generopessoas'];
$corpessoas = $_POST['corpessoas'];
$alturapessoas = $_POST['alturapessoas'];
$pesopessoas = $_POST['pesopessoas'];

//gravando os dados no banco
    $recebeDados = "INSERT INTO pessoas(nome_pessoas, idade_pessoas, genero_pessoas, cor_pessoas, altura_pessoas, peso_pessoas)
    VALUES(
        '$nomepessoas',
        '$idadepessoas',
        '$generopessoas',
        '$corpessoas',
        '$alturapessoas',
        '$pesopessoas')";

//validando a query

    $cadastro = mysqli_query($conn, $recebeDados)
    or die(mysqli_error($conn));

//retorna a pagina de produtos

    header('Location:index.php');

?>