<?php
include('conection.php');

$email_user = $_POST['email'];
$pass = $_POST['senha'];

$sql = $con->prepare("SELECT * FROM usuario WHERE email='$email_user' AND senha='$pass'");

$sql->execute();

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $id_user = $row['id_user'];
    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    $telefone = $row['telefone'];
    $id_tipo = $row['id_tipo'];

    $html = <<<HTML
        <pre>
        Id = $id_user    
        Nome = $nome       
        Senha = $senha          
        E-mail = $email
        Telefone = $telefone    
        Tipo Usuario ID = $id_tipo
        </pre>
    HTML;
    // echo "<br>";

    // echo $html;
    if($email_user == $_POST['email'] || $senha == $_POST['senha']){
        echo "Senha ou Email já Cadastrados";
    }
    else{
        echo "!Cadastro Realizado com sucesso!";
    }
}
// echo $sql;
// echo "Teste";

?>