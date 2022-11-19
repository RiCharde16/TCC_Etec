<?php
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
  // header('location: paginainicial.html');
  
}
?>