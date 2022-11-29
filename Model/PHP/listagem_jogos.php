<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jogos Tabela</title>
        <!-- <link rel="stylesheet" href="../CSS/tabela.css"/> -->
        <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/menu_style.css">
        <link rel="stylesheet" href="/TCC_OFNOGAMES//View/CSS/style.css" type="text/css">
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
            }
            .grid{
                display: grid;
                /* background-color: #0f0; */
                grid-template-columns: auto auto auto;
            }
            .jogo{
                cursor: pointer;
                width: 100px;
                /* margin: 100px 0px; */
                transition: 0.5s ease-in-out;

            }
            .jogo:hover{
                transform: scale(1.1);
            }
            #footer{
                /* position: absolute;
                bottom: 0; */
            }
        </style>
</head>
<body>
    <menu-site></menu-site>
    <header-jogo></header-jogo>
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
                
                $sucess = $sql->execute();
            }
            else{
                $sql = $con->prepare("SELECT * FROM jogos");
    
                $sql->execute();
            }
            
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

                // echo "</html>";
            ?>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <footer-site id="footer"></footer-site>
    <script src="/TCC_OFNOGAMES/Controller/javascript/jogo_link.js"></script>
    <script src="/TCC_OFNOGAMES/Controller/javascript/menu.js"></script>
</body>
</html>