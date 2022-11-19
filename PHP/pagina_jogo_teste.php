<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <link rel="stylesheet" href="../CSS/pagina_jogo.css">
    <script src="./src/components/tela_jogo.js" defer></script>
</head>
<body>
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
            // $teste = $linha['id_jogo'];
            $html = <<<HTML
                <div class="scroll-escondido">
                    <div class="block">
                        <h1 id="titulo">$titulo_jogo</h1>
                    </div>
                    <iframe src="https://www.jogos360.com.br/bad_ice_cream_2.html" frameborder="0"></iframe>
                    </div>
                    <div class="block-2">
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
    <script src="./javascript/Informações_jogo.js"></script>
</body>
</html>