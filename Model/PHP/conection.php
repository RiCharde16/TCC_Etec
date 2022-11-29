<?php
error_reporting(0); // Ira Desabilitar as mensagens de erro do PHP
// sem que elas sejam exibidas no navegador
 
$host = "localhost";
$dbname = "loja_games";
$user = "root";
$password = "";

// date_default_timezone_set( "America/Sao_Paulo" );   

$con = new PDO("mysql:host=$host;dbname=$dbname","$user","$password", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
// $con = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");

?>