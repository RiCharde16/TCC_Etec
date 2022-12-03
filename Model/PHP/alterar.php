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
    .main{
        color: #fff;
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
session_start();

// echo $_SESSION['id'];
// echo $_SESSION['tabela'];

if($_SESSION['tabela'] == 'jogos'){
    // echo $_SESSION['tabela'];

    $id_jogo = $_SESSION['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $desc = $_POST['desc'];
    $url = $_POST['url'];

    // $img = $_POST['img'];
    $upload_dir = '/TCC_OFNOGAMES/View/img/img_jogos/';
    $arquivo = $_FILES['img']['name'];

    // Separa o arquivo e cria um novo nome para a imagem
    // $separa = explode('.',$arquivo);
    // $separa = array_reverse($separa);
    // $tipo = $separa[0];
    // $imagem_jogo  = $ar . "." . $tipo;
    if(copy($_FILES['img']['tmp_name'], $upload_dir . $arquivo)){

        $arquivo_dir = $upload_dir . $arquivo;

        $sql = $con->prepare("UPDATE jogos SET nome='$nome', categoria='$categoria', descricao='$desc', url='$url', imagem='$arquivo_dir' WHERE id_jogo=$id_jogo ");
    
        $sql->execute();
    
        echo <<<HTML
            <main class="container">
                    <h1>! Jogo Alterado !</h1>
            </main> 
        HTML;

        header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
    }
}
else if($_SESSION['tabela'] == 'usuario'){
    // echo $_SESSION['tabela'];
    // echo "<br>";
    // echo $_SESSION['id'];

    $id_user = $_SESSION['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tel = $_POST['tel'];

    $sql = $con->prepare("UPDATE usuario SET nome='$nome', email='$email', senha='$senha', telefone='$tel' WHERE id_user=$id_user ");

    $sql->execute();

    // echo "<br>";
    echo <<<HTML
    <main class="container">
            <h1>! usuario Alterado !</h1>
    </main> 

    HTML;
    header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
    // echo $_SESSION['tabela'];
}
?>