<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/style.css">
    <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/login.css">
</head>
<body>  
    <form action="" method="POST">
        <h1>Alterar Dados</h1>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <label for="categoria">Categoria:</label>
            <select name="categoria">
                <option value="Ação">Ação</option>
                <option value="Aventura">Aventura</option>
                <option value="RPG">RPG</option>
                <option value="Puzzle">Puzzle</option>
                <option value="Party Game">Party Games</option>
                <option value="Esporte">Esporte</option>
            </select>
            <label for="desc">Descrição:</label>
            <textarea name="desc"></textarea>
            <label for="url">Url:</label>
            <input type="text" name="url">
            <label for="img">Imagem:</label>
            <input type="file" name="img">
        </div>
        <input type="submit" value="Alterar">
    </form>
    <?php
    include('conection.php');

    $dados = $_GET['numero'];

    // Dados do Formulario Alterar
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $desc = $_POST['desc'];
    $url = $_POST['url'];
    $img = $_POST['img'];

    // $html = <<<HTML
    // <pre>
    // Nome: $nome
    // Categoria: $categoria
    // Descrição: $desc
    // Url: $url
    // Imagem: <img src="$img">
    // </pre>
    // HTML;

    // echo $html;

    $sql = $con->prepare("UPDATE jogos SET nome='$nome', categoria='$categoria', descricao='$desc', url='$url', imagem='$img' WHERE id='$dados' ");

    $sql->execute();
    ?>
</body>
</html>