<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFNO Games</title>
    <link rel="shortcut icon" href="/TCC_OFNOGAMES/View/img/Logo_OFNOGAMES.png" type="image/x-icon">
    <link rel="shortcut icon" href="/TCC_OFNOGAMES/View/img/Logo_OFNOGAMES.png" type="image/x-icon">
    <link rel="stylesheet" href="/TCC_OFNOGAMES//View/CSS/pagina_jogo.css">
    <!-- <script src="./src/components/tela_jogo.js" defer></script> -->
    <script src="/TCC_OFNOGAMES/View/src/components/Menu.js" defer></script>
    <script src="/TCC_OFNOGAMES/View/src/components/Header.js" defer></script>
    <script src="/TCC_OFNOGAMES/View/src/components/footer.js" defer></script>
</head> 
<body>
    <menu-site></menu-site>
    <header-jogo></header-jogo>
    <section class="container">
        <?php
         include('conection.php');

         $id = $_GET['id'];

         $sql = $con->prepare("SELECT * FROM jogos WHERE id_Jogo = '$id'");

         $sql->execute();

         while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            // echo "<h1>".$linha['id_jogo']."</h1>";
            echo "<br>";
            // echo $linha['id_jogo'];
            $titulo_jogo = $linha['nome'];
            $categoria = $linha['categoria'];
            $descricao = $linha['descricao'];
            $url = $linha['url'];
            $img = $linha['imagem'];
            // $teste = $linha['id_jogo'];
            $html = <<<HTML
                <div class="scroll-escondido">
                    <div class="block">
                        <h1 id="titulo">$titulo_jogo</h1>
                    </div>
                    <iframe src="$url" frameborder="0"></iframe>
                    <!-- <iframe src="https://www.jogos360.com.br/bad_ice_cream_2.html" frameborder="0"></iframe> -->
                    </div>
                    <div class="block-2">
                        <div><img src="$img" alt="$titulo_jogo.img" id="img-jogo"></div>
                        <p id="descricao"> $descricao </p>
                </div>
            HTML;

            echo $html;
            }
        //  echo $teste;
        //  echo $id;
        ?>
    </section>
    <!-- <Tela-jogo>     -->
    <footer-site></footer-site>
    <script src="./javascript/Informações_jogo.js"></script>
</body>
</html>