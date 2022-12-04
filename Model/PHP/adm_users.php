<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFNO Games</title>
    <link rel="shortcut icon" href="/TCC_OFNOGAMES/View/img/Logo_OFNOGAMES.png" type="image/x-icon">
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
        align-items: center;
        background-color: #fff;
        width: 225px;
        height: 30px;
        padding: 20px;
        justify-content: center;
    }
    .container{
        display: flex;
        justify-content: center;
        margin: 50px 0px 0px 0px;
    }
    .buscar img{
        width: 25px;
        height: 25px;
        rotate: 100deg;
    }
    .buscar input{
        width: 220px;
        border: none;
        text-align: left;
        padding: 5px;
        margin: 0px 10px 0px 0px;
    }
    .buscar input:focus{
        box-shadow: 0 0 0 0;
        outline: 0;
    }
    table tbody tr td{
        padding: 2px;
    }
    button{
        padding: 0px 5px;
        margin: 0px 10px;
        background: #fff;
        color: #000;
        border-radius: 5px;
        transition: 0.3s ease-in-out;
        cursor: pointer;
    }
    button:hover{
        color: #fff;
        background-color: #000;
        border: 1px solid #fff;
    }
</style>
<body>
    <!-- aba menu -->
    <menu-site></menu-site>
    <!-- Header -->
    <header-jogo></header-jogo>
    <!-- Main -->
    <br>
    <br>
    <br>
    <main>
        <div class="container">
            <div class="buscar">
                <input type="text" id="filter">
                <img src="/TCC_OfNOGames/View/img/lupa-arredondada.png" alt="lupa.img">
            </div>
            <button id='jogos'>Jogos</button>
            <button id="user">usuarios</button>
            <button id="cad_jogo">Novo Jogo</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>telefone</th>
                    <th colspan="3">descrição</th>
                </tr>
            </thead> 
            <!-- <tbody> -->
                <?php
                include('./conection.php');
                
                // echo "Teste";
                $tabela_usuario = $con->prepare("SELECT * FROM usuario");
                
                $tabela_usuario->execute();
                echo "<tbody id='jogos'>";
                while($linha = $tabela_usuario->fetch(PDO::FETCH_ASSOC)){
                        $id = $linha['id_user'];
                        $nome = $linha['nome'];
                        $email = $linha['email'];
                        $senha = $linha['senha'];
                        $tel = $linha['telefone'];
                        $id_tipo = $linha['id_tipo'];

                        if($id_tipo == 1){
                            $tipo_user = "Administrador";
                        }else{
                            $tipo_user = "Usuario";
                        }

                        $html = <<<HTML
                            <tr>
                                <td>$id</td>
                                <td>$nome</td>
                                <td>$email</td>
                                <td>$senha</td>
                                <td>$tel</td>
                                <td>$tipo_user</td>
                                <td> <button class="exc" dado="$id" tabela="usuario">Excluir</button> </td>
                                <td> <button class="alt" dado="$id" tabela="usuario">Alterar</button> </td>
                            </tr>
                        HTML;

                        echo $html;
                        echo "</tbody>";
                }
                // echo "<tbody>";

                // while()
                ?>
            <!-- </tbody> -->
        </table>
    </main>
    <!-- Footer -->
    <br>
    <br>
    <br>
    <br>
    <footer-site></footer-site>
    <script src="/TCC_OFNOGAMES/Controller/javascript/adminstrador.js"></script>
    <script src="/TCC_OFNOGAMES/Controller/javascript/filter.js"></script>
</body>
</html>