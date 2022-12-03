<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFNO Games</title>
    <link rel="shortcut icon" href="./View/img/controle-de-video-game.png" type="image/x-icon">
    <link rel="stylesheet" href="./View/CSS/style.css">
    <link rel="stylesheet" href="./View/CSS/menu_style.css">
    <script src="./View/src/components/Header.js" defer></script>
    <script src="./View/src/components/Menu.js" defer></script>
    <script src="./View/src/components/footer.js" defer></script>
    <script src="./View/src/components/cardJogo.js" defer></script>
</head>
<body>
   <header-jogo></header-jogo>
    <menu-site></menu-site>
    <main>
        <section>
            <div class="carrosel">
                <div class="container">
                    <img src="https://adrenaline.com.br/uploads/chamadas/super-smash-bros-ultimate-1200.jpg" class="slide" >
                    <img src="https://i.ytimg.com/vi/A5TMXbk04ec/maxresdefault.jpg" class="slide">
                    <img src="https://static.heroesofthestorm.com/images/global/fb-share-1fcc54becc.jpg" class="slide">
                    <img src="https://revolutionarena.com.br/wp-content/uploads/2022/07/MultiVersus.jpg" class="slide">
                    <!-- Setas -->
                </div>
                <!-- <img src="" alt="prev-next"> -->
            </div>
            <div id="setas-grupo">
                <img src="./View/img/seta-esquerda.png" alt="seta-pro" id="seta-before" class="setas">
                <img src="./View/img/seta-direita.png" alt="seta-next" id="seta-prev" class="setas">
            </div>
        </section>
        <section>
            <h1>Qual seu estilo de jogo?</h1>
            <div class="container alinhar">
                <div>
                    <div class="estilos-jogos"><img src="./View/img/action_game.svg" alt="action"></div>
                    <h1>Ação</h1>
                </div>
                <div>
                    <div class="estilos-jogos"><img src="./View/img/Rpg_game.svg" alt="RPG"></div>
                    <h1>rpg</h1>
                </div>
                <div>
                    <div class="estilos-jogos"><img src="./View/img/adventure_game.svg" alt="adventure"></div>
                    <h1>aventura</h1>
                </div>
                <div>
                    <div class="estilos-jogos"><img src="./View/img/puzzle_game.svg" alt="puzzle" style="margin: 0px 0px 0px 15px"></div>
                    <h1>puzzle</h1>
                </div>
                <div>
                    <div class="estilos-jogos"><img src="./View/img/party_games.svg" alt="party game"></div>
                    <h1>party games</h1>
                </div>
                <div>
                    <div class="estilos-jogos"><img src="./View/img/esport_games.svg" alt="esport"></div>
                    <h1>esportes</h1>
                </div>
            </div>
        </section>
        <section>
            <h1 class="text-white">Jogos em alta</h1>
            <div class="grid-2">
                <?php
                    include('./Model/PHP/conection.php');
                    $sql = $con->prepare('SELECT * FROM jogos LIMIT 3');

                    $sql->execute();

                    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                        $idJogo = $row['id_jogo'];
                        $nome = $row['nome'];
                        $categoria = $row['categoria'];
                        $descricao = $row['descricao'];
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
                ?>
            </div>
            <div class="container btn"><button id="btn_Mjogos">Mais Jogos</button></div>
        </section>
    </main>
    <footer-site></footer-site>
    <script src="./Controller/javascript/carrosel.js"></script>
    <script src="./Controller/javascript/categoria.js"></script>
    <script src="./Controller/javascript/jogo_link.js"></script>
    <!-- <script src="./Controller/javascript/menu.js"></script> -->
</body>
</html>