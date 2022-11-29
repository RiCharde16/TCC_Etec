<?php
include('conection.php');

$dados = $_GET['numero'];

// echo $dados;
$sql = $con->prepre("DELETE FROM jogos WHERE id_jogo='$dados' ");

$sql->execute();

echo "!Jogo excluido!"

?>