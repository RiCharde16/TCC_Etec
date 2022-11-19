<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jogos Tabela</title>
        <!-- <link rel="stylesheet" href="../CSS/tabela.css"/> -->
        <link rel="stylesheet" href="../CSS/menu_style.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <script src="./src/components/cardJogo.js" defer></script>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                background-color: #000;
            }
            .grid{
                display: grid;
                /* background-color: #0f0; */
                grid-template-columns: auto auto auto;
            }
            .jogo{
                cursor: pointer;
                width: 100px;
            }
        </style>
</head>
<body>
<div id="menu_column" class="active">
        <!-- <img src="img/lupa-arredondada.png"> -->
        <h1 id="btn_close">X</h1>
        <input type="text" name="serach" id="search">
        <ul>
            <li><a href="#">JOGOS</a></li>
            <li><a href="#loja">LOJA</a></li>
            <li><a href="../sobre.html">SOBRE</a></li>
            <li><a href="#ajuda">AJUDA</a></li>
        </ul>
        
    </div>
    <header class="container bg-purple-black">
        <img src="img/menu.png" alt="icon-menu" id="icon-menu">
        <nav class="container menu">
            <div class="container">
                <a href="#">
                    <li>Jogos</li>
                </a>
                <a href="">
                    <li>Loja</li>
                </a>
            </div>
            <div class="container">
                <a href="ajuda.html">
                    <li>Ajuda</li>
                </a>
                <a href="sobre.html">
                    <li>Sobre</li>
                </a>
            </div>          
        </nav>
        <img src="img/lupa-arredondada.png" alt="lupa-img">
    </header>
    <!-- conteudo principal -->
    <div class="grid">
            <?php
            include('./conection.php');

            $sql = $con->prepare("SELECT * FROM jogos");

            $sql->execute();
            
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $idJogo = $row['id_jogo'];
                $nome = $row['nome'];
                $categoria = $row['categoria'];
                $descricao = $row['descricao'];

                $card = <<<card
                        <card-jogo class="jogo"
                            photo="https://images.crazygames.com/games/fireboy-and-watergirl-the-forest-temple/cover-1586285142530.jpg?auto=format,compress&q=75&cs=strip"
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
    <!-- <card-jogo class="jogo"
        photo="https://images.crazygames.com/games/fireboy-and-watergirl-the-forest-temple/cover-1586285142530.jpg?auto=format,compress&q=75&cs=strip"
        titulo-jogo="$nome"
        descricao="$descricao"
        chave="$idJogo"
    ></card-jogo> -->
    <script>
        const card_jogo = document.getElementsByClassName('jogo')

        // console.log(card_jogo);
        for(jogo of card_jogo){
            // console.log(jogo)
            // let dados = []
            jogo.addEventListener('click',(ele)=>{
                // alert(jogo.getAttribute('titulo-jogo'));
                
                // nome = ele.target.getAttribute('titulo-jogo')
                // desc = ele.target.getAttribute('descricao')
                // photo = ele.target.getAttribute('photo')
                id = ele.currentTarget.getAttribute('chave');
                // window.location = '../pagina_jogo_teste.html?'+nome+desc+photo
                window.location = `../PHP/pagina_jogo_teste.php?id=${id}`
                
            })
        }
    </script>
    <script src="../javascript/menu.js"></script>
</body>
</html>