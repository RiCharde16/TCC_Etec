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

$nome_jogo = $_POST['nome'];
$categoria = $_POST['categoria'];
$url = $_POST['url'];
// Upload da imagem dos jogos
$upload_dir = '/TCC_OFNOGAMES/View/img/img_jogos/';
$arquivo = $_FILES['img']['name'];

// Separa o arquivo e cria um novo nome para a imagem
// $separa = explode('.',$arquivo);
// $separa = array_reverse($separa);
// $tipo = $separa[0];
// $imagem_jogo  = $ar . "." . $tipo;

$desc = $_POST['desc'];


if(copy($_FILES['img']['tmp_name'], $upload_dir . $arquivo)){
    // $uploadfile = $upload_dir . $imagem_jogo;
    $diretorio_arquivo = $upload_dir . $arquivo;

    $sql = $con->prepare("INSERT INTO jogos(nome,categoria,descricao,imagem,url) VALUES('$nome_jogo','$categoria','$desc','$diretorio_arquivo','$url')");

    $sql->execute();
//     echo <<<HTML
// <pre>
// Nome: $nome_jogo    
// Categoria: $categoria 
// URL: $url   
// Descrição: $desc
// Imagem: $diretorio_arquivo   
// </pre>    

// <img src="$diretorio_arquivo">

// HTML;
echo <<<HTML
<main class="container">
        <h1>! Jogo Cadastrado!</h1>
</main>
HTML;
header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
}else{
echo <<<HTML
    <main class="container">
            <h1>! Jogo Não Cadastrado!</h1>
    </main> 
HTML;
header('refresh: 4; url= /TCC_OFNOGAMES/Model/PHP/Pagina_administrador.php');
}

// $sql->execute();

?>