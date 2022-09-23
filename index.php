<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Com google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body class="bg-dark d-flex justify-content-center align-itens-center p-5 text-light">
<script src="https://accounts.google.com/gsi/client" async defer></script>
   <main class="border border-white text-center p-5">
      <h1>Login<h1>
      <form method="post" action="">
         <label for="nome">Nome:</label>
         <input type="text" name="nome">
         <br>
         <label for="email">E-mail:</label>
         <input type="email" name="email">
         <br>
         <label for="senha">Senha:</label>
         <input type="password" name="senha">
      </form>
      <div id="g_id_onload"
         data-client_id="132012896010-keem8l8iip3loramee31ar2kle4dv3vb.apps.googleusercontent.com"
         data-login_uri="http://localhost/TCC_TESTE/dados.php"
         data-auto_prompt="false">
      </div>
      <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="rectangular"
         data-logo_alignment="left">
      </div>
   <main>
</body>
</html>