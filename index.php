<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container">
    <div id="container-login">
    <span id="title-login"><h1>Login</h1></span>
    <div id="imagem-login">
      <img src="imagens/user.png">
    </div>
      <form action="valida_login.php" method="POST">
        <input type="text" name="email" placeholder="E-mail" maxlength="50">
        <input type="text" name="senha" placeholder="Senha" maxlength="12">
        <span id="button-form"><button id="btn-login" type="submit">LOGIN</button></span>
      </form>
      <span id="cadastro">Ainda não possui uma conta? <a href="cadastro.php">Cadastre-se</a></span>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>