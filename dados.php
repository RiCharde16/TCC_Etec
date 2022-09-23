<?php
// AUTOLOAD DO COMPOSER
// require_once 'vendor/autoload.php';

// DEPEDENCIAS
use Google\Client as GoogleCliente;

// VALIDAÇÃO PRINCIPAL DO COOKIE

// VERIFICA OS CAMPOS OBRIGATORIOS
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token']))
{
    header('location: index.php');
    exit;
}
// COOKIE CSRF 

$cook = $_COOKIE['g_csrf_token'] ?? '';

if($_POST['g_csrf_token'] != $cook)
{
    header('location: index.php');
    exit;
}
else{
  header('location: paginainicial.html');
}

// VALIDAÇÃO DO TOKEN
// Instancia do cliente google
// $client = new GoogleClient(['client_id' => 
// '132012896010-keem8l8iip3loramee31ar2kle4dv3vb.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend

// // Obtem os dados do usuario com base no JWT
// $payload = $client->verifyIdToken($_POST['credential']);

// // VERIFICA OS DADOS DO payload
// if (!isset($payload['email'])) {
// //   $userid = $payload['sub'];
//   echo "<pre>";
//   print_r($payload);
//   echo "</pre>";

  // Invalid ID token
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($cook);
// echo "</pre>";

exit;
?>