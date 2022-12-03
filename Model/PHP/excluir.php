
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

$tabela = $_GET['tabela'];
$dados = $_GET['numero'];

// echo $dados;
// echo $tabela;

if($tabela == 'jogos'){

    $sql = $con->prepare("DELETE FROM $tabela WHERE id_jogo='$dados' ");
    
    $sql->execute();
    
    echo <<<HTML
    <main class="container">
            <h1>! Jogo Excluido !</h1>
    </main> 
    HTML;
    // echo $tabela;
    header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
}
else if($tabela == 'usuario'){
    $sql = $con->prepare("DELETE FROM usuario WHERE id_user='$dados' ");
    
    $sql->execute();

    echo <<<HTML
    <main class="container">
            <h1>! usuario excluido!</h1>
    </main> 
    HTML;
    header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');

}

?>