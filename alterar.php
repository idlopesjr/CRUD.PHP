<?php
//incluindo conexao com banco
include "conexao.php";

//puxando os dados do forms e salvando nas variaveis

$idpessoas = $_POST['idpessoas'];
$nomepessoas  = $_POST['nomepessoas'];
$idadepessoas = $_POST['idadepessoas'];
$generopessoas = $_POST['generopessoas'];
$corpessoas = $_POST['corpessoas'];
$alturapessoas = $_POST['alturapessoas'];
$pesopessoas = $_POST['pesopessoas'];

//gravando os dados no banco
    $recebeDados = "UPDATE pessoas
    SET
        nome_pessoas = '$nomepessoas',
        idade_pessoas = '$idadepessoas',
        genero_pessoas = '$generopessoas',
        cor_pessoas = '$corpessoas',
        altura_pessoas = '$alturapessoas',
        peso_pessoas = '$pesopessoas'
    WHERE id_pessoas = '$idpessoas'";

//validando a query

    $alterar = mysqli_query($conn, $recebeDados)
    or die(mysqli_error($conn));

//retorna a pagina de produtos

   header('Location:index.php');

?> 