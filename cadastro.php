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
    <span id="title-login"><h1>Cadastro</h1></span>
    <div id="imagem-login">
      <img src="imagens/user.png">
    </div>
      <form action="" method="">
        <input id="nome-completo" type="text" placeholder="Nome completo" maxlength="90">
        <input id="email" type="text" placeholder="E-mail" maxlength="50">
        <input id="senha" type="password" placeholder="Senha" maxlength="12">
        <input id="confirma-senha" type="password" placeholder="Confirmação de senha" maxlength="12">
        <span id="button-form"><button id="btn-cadastrar" type="submit">CADASTRAR</button></span>
      </form>
      <span id="cadastro">Já possui uma conta? <a href="index.php">Login</a></span>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>