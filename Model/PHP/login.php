<style>
    *{
        padding: 0;
        margin: 0;
        font-family: sans-serif;
        color: #fff;
        text-transform: uppercase;
    }
    body{
        background-color: #000;
    }
    img{
        filter: invert();
    }
    .container{
        display:flex;
        justify-content:center;
        align-items: center;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    img{
        width: 100px;
        height: 100px;
    }
</style>
<?php
include('conection.php');

$usuario = $_POST['nome'];
$senha = $_POST['senha'];

$sql = $con->prepare("SELECT * FROM usuario where nome='$usuario' AND senha='$senha' ");

$sql->execute();

$number_of_rows = $sql->fetchColumn(); // Ira retornar o numero da linha onde o valor esta no Banco de Dados

if($number_of_rows > 0){
    $sql->execute();

    while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
        $id_user = $linha['id_user'];
        $nome_user = $linha['nome'];

        if($linha['id_tipo'] == 1){
            $tipo_user = "Adminstrador";
            header('location: /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
        }
        else if($linha['id_tipo'] == 2){
            $tipo_user = "Usuario";
            header('location: /TCC_OFNOGAMES/index.php');
        }

        // echo <<<HTML
        // <pre>
        // <h1> $tipo_user </h1>
        // Bem Vindo $nome_user de ID $id_user
        // </pre>
        // HTML;

    }
}else{
    // echo "Usuario ou Senha incorretos";
    echo <<<HTML
        <div class="container">
            <h1>Usuario e/ou Senha Incorretos</h1>
            <img src="/TCC_OFNOGAMES/View/img/error_login.svg" alt="error">
        </div>
    HTML;

    // echo $number_of_rows;
    header('refresh:4; url= /TCC_OFNOGAMES/View/login.html');
}



?>