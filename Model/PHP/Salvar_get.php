<?php
    // include('conection.php');
    session_start();

    $dados = $_GET['numero'];
    $tabela = $_GET['tabela'];

    // echo $dados;

    if($tabela == "jogos"){
    // Dados do Formulario Alterar

        $_SESSION['id'] = $dados;
        $_SESSION['tabela'] = $tabela;
        header('location: /TCC_OFNOGAMES/View/alterar_jogo.html');
        // echo "Jogos";
    }else{
        $_SESSION['id'] = $dados;
        $_SESSION['tabela'] = $tabela;
        // echo "Usuario";
    
        header('location: /TCC_OFNOGAMES/View/alterar_usuario.html');
    }
    // echo $_SESSION['id'];
    // echo "<br>";
    // echo $_SESSION['tabela'];

 

    // // $html = <<<HTML
    // // <pre>
    // // Nome: $nome
    // // Categoria: $categoria
    // // Descrição: $desc
    // // Url: $url
    // // Imagem: <img src="$img">
    // // </pre>
    // // HTML;

    // // echo $html;

    // $sql = $con->prepare("UPDATE jogos SET nome='$nome', categoria='$categoria', descricao='$desc', url='$url', imagem='$img' WHERE id='$dados' ");

    // $sql->execute();
?>