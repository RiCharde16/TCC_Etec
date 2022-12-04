<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OFNO Games</title>
        <link rel="shortcut icon" href="/TCC_OFNOGAMES/View/img/Logo_OFNOGAMES.png" type="image/x-icon">
        <!-- <link rel="stylesheet" href="../CSS/tabela.css"/> -->
        <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/menu_style.css">
        <!-- <link rel="stylesheet" href="/TCC_OFNOGAMES//View/CSS/style.css" type="text/css"> -->
        <script src="/TCC_OFNOGAMES//View/src/components/cardJogo.js" defer></script>
        <script src="/TCC_OFNOGAMES/View/src/components/Header.js" defer></script>
        <script src="/TCC_OFNOGAMES/View/src/components/Menu.js" defer></script>
        <script src="/TCC_OFNOGAMES/View/src/components/footer.js" defer></script>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                background-color: #000; 
                color: #fff;
            }
            .grid{
                margin: 50px auto 0px auto;
                display: grid;
                padding: 0px 106px;
                grid-template-columns: auto auto auto auto;
                
            }
            .jogo{
                cursor: pointer;
            }
            #notfound img{
                width: 140px;
                height: 100px;
                padding: 0px 20px;
            }
            #notfound{
                display: flex;
                margin: 69px 0px;
                position: relative;
                width: 80vw;
                heigth: 20ovh;
                justify-content: center;
                align-items: center;
                text-transform: uppercase;
            }
        </style>
</head>
<body>
    <menu-site></menu-site>
    <header-jogo></header-jogo>
    <br>
    <br>
    <!-- conteudo principal -->
    <div class="grid">
            <?php
            include('./conection.php');

            $categoria = $_GET['categoria'];
            $nome_jogo = $_GET['nome'];

            // echo $categoria;
            if($categoria != null){
                $sql = $con->prepare("SELECT * FROM jogos WHERE categoria LIKE '%$categoria%'");
                // echo $categoria;
                $sql->execute();
            }
            else if($nome_jogo != null){
                $sql = $con->prepare("SELECT * FROM jogos WHERE nome LIKE '%$nome_jogo%' ");
                $verificacao = $con->prepare("SELECT * FROM jogos WHERE nome LIKE '%$nome_jogo%' ");

                $verificacao->execute();

                $verificacao = $verificacao->fetchColumn();

                if($verificacao == null || $verificacao == ""){
                    echo <<<JOGO
                    <div id="notfound">
                        <img src="/TCC_OFNOGAMES/View/img/question-404.png">
                        <h1>Jogo não encontrado</h1>
                        <img src="/TCC_OFNOGAMES/View/img/question-404.png">
                    </div>
                    JOGO;

                }else{
                    $sucess = $sql->execute();
                }
            }
            else{
                $sql = $con->prepare("SELECT * FROM jogos");
    
                $sql->execute();
            }
            
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $idJogo = $row['id_jogo'];
                $nome = $row['nome'];
                $categoria = $row['categoria'];
                // $descricao = $row['descricao'];
                $img = $row['imagem'];
                
                $card = <<<card
                        <card-jogo class="jogo"
                            photo="$img"
                            titulo-jogo="$nome"
                            descricao="$descricao"
                            chave="$idJogo"
                        ></card-jogo>
                card;

                
                echo $card;
            }
                // echo "</html>";
            ?>
    </div>
    <footer-site id="footer"></footer-site>
    <script src="/TCC_OFNOGAMES/Controller/javascript/jogo_link.js"></script>
    <script src="/TCC_OFNOGAMES/Controller/javascript/menu.js"></script>
</body>
</html>