<?php
include "conexao.php";
echo "<link href='style-main.css' rel='stylesheet' type='text/css' />";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$n_casa = $_POST['n'];


$insert = mysqli_query($connection,"insert into cadastro values ('{$nome}','{$cpf}','{$celular}','{$bairro}','{$cidade}','{$endereco}','{$n_casa}');") or die ("Erro ao realizar os cadastro!");
echo "<script>alert('Cadastro realizado com sucesso!');window.location = 'cadastro.html';</script>";
//echo "<script>window.location = 'cadastro.html';</script>";
?>
