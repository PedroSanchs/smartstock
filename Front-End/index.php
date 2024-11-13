<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Smart Stock</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main class="container">
      <div class="container-left">
        <div class="logo">
          <img src="./imagens/Logo Login.png" alt="" />
        </div>
        <div class="login">
          <h1 class="login-title">Login</h1>
          <form action="./teste123.php" class="login-form">
            <input type="text" placeholder="E-mail" required />
            <input type="password" placeholder="Senha" required />
            <a href="">Esqueceu a Senha</a>
            <div class="login-actions">
              <button type="submit">Entrar</button>
              <button type="submit">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-right">
        <img src="./imagens/Caixa login.png" alt="" />
      </div>
    </main>
  </body>
</html>
