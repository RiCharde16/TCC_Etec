
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
</style>
<?php

include('conection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['tel'];

$sql = $con->prepare("INSERT INTO usuario(nome,email,senha,telefone,id_tipo) VALUES('$nome','$email','$senha','$telefone',2)");

$verificar = $con->prepare("SELECT * FROM usuario where email='$email' || senha='$senha' ");

$verificar->execute();

$num_rows= (int)$verificar->fetchColumn();

if($num_rows > 0 ){
    // // $verificar->execute();
    // header('location: /TCC_OFNOGAMES/View/cadastro.html?form="1"');
    // // while($linha = $verificar->fetch(PDO::FETCH_ASSOC)){
    // //     $email_user = $linha['email'];
    // //     $senha_user = $linha['senha'];
    
    // //     echo <<<HTML
    // //     <pre>
    // //         $email == $email_user
    // //         $senha == $senha_user
    // //     </pre>
    // //     HTML;
    
    // // }
    echo <<<HTML
        <main class="container">
            <h1>Email ou Senha Em uso tente outro</h1>
        </main>
    HTML;
    header('refresh:3; url = /TCC_OFNOGAMES/View/cadastro.html');

}else{
    $sql->execute();

    echo <<<HTML
    <main class="container">
        <h1>! Usuario Cadastrado com sucesso !</h1>
    </main>
    HTML;
    header('refresh:3; url= /TCC_OFNOGAMES/View/cadastro.html');
}

?>