<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OfNoGames</title>
    <script src="/TCC_OFNOGAMES/View/src/components/Menu.js" defer></script>
    <script src="/TCC_OFNOGAMES/View/src/components/Header.js" defer></script>
    <script src="/TCC_OFNOGAMES/View/src/components/footer.js" defer></script>
    <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/style.css">
    <link rel="stylesheet" href="/TCC_OFNOGAMES/View/CSS/tabela.css">
</head>
<style>
    .buscar{
        display: flex;
        border-radius: 50px;
        background-color: #fff;
        width: 200px;
        height: 30px;
        padding: 2px;
        justify-content: center;
    }
    .container{
        display: flex;
        justify-content: center;
        margin: 50px 0px;
    }
    .buscar img{
        width: 25px;
        height: 25px;
        rotate: 100deg;
    }
    .buscar input{
        border: none;
        text-align: right;
        padding: 5px;
    }
    .buscar input:focus{
        box-shadow: 0 0 0 0;
        outline: 0;
    }
</style>
<body>
    <!-- aba menu -->
    <menu-site></menu-site>
    <!-- Header -->
    <header-jogo></header-jogo>
    <!-- Main -->
    <main>
        <div class="container">
            <div class="buscar">
                <input type="text">
                <img src="/TCC_OfNOGames/View/img/lupa-arredondada.png" alt="lupa.img">
            </div>
            <button>Jogos</button>
            <button>usuarios</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>categoria</th>
                    <th>image</th>
                    <th>Url</th>
                    <th colspan="3">descrição</th>
                </tr>
            </thead> 
            <tbody>
                <?php
                include('./conection.php');
                
                // echo "Teste";
                $tabela_jogos = $con->prepare("SELECT * FROM jogos");
                $tabela_usuario = $con->prepare("SELECT * FROM usuario");
                
                $tabela_jogos->execute();
                
                while($linha = $tabela_jogos->fetch(PDO::FETCH_ASSOC)){
                        $id_jogo = $linha['id_jogo'];
                        $nome_jogo = $linha['nome'];
                        $cat_jogo = $linha['categoria'];
                        $img_jogo = $linha['imagem'];
                        $url_jogo = $linha['url'];
                        $desc_jogo = $linha['descricao'];

                        $html = <<<HTML
                            <tr>
                                <td>$id_jogo</td>
                                <td>$nome_jogo</td>
                                <td>$cat_jogo</td>
                                <td>$img_jogo</td>
                                <td>$url_jogo</td>
                                <td>$desc_jogo</td>
                                <td> <button class="exc" dado="$id_jogo">Excluir</button> </td>
                                <td> <button class="alt" dado="$id_jogo">Alterar</button> </td>
                            <tr>
                        HTML;

                        echo $html;
                }
                ?>
            </tbody>
        </table>
    </main>
    <!-- Footer -->
    <footer-site></footer-site>
    <script src="/TCC_OFNOGAMES/Controller/javascript/adminstrador.js"></script>
</body>
</html>