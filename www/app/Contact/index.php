<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/contact.css" /> 
    <link rel="stylesheet" href="css/header.css" />
    <script src="js/script.js"></script>
  </head>
  <body>
    <?php
    $name=""; 
    $message = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = trim($_POST['name']);
      $mensagem = !empty($name) 
          ? "Obrigado(a) " . htmlspecialchars($name) . ", seus dados foram enviados com sucesso!"
          : "Por favor, preencha o campo antes de continuar.";
  }
  ?>
    <div class="container">
      <header class="header">
        <div class="logoShoes">
          <img src="../assets/images/logoShoes.png" width="100px" />
        </div>
        <div class="title">
          <p class="z-title">Z</p>
          <p>shoes</p>
        </div>
        <div class="menu">
          <a href="/index.html">
            <h2>Home</h2>
          </a>
          <a href="/Contact/index.php">
            <h2>Contato</h2>
          </a>
        </div>
      </header>
      <div class="card">
        <h1 class="cardTitle">Contato</h2>
        <form id="forms" method="post">
          <div class="inputsForm">
            <div class="field-wrapper">
              <label id="inputTitle" for="name" value="<?php echo htmlspecialchars($name); ?>"></label>Nome</label>
              <input type="text" id= "name" name="name" placeholder="Digite seu nome" required>
            </div>
            <div class="field-wrapper">
              <label id="inputTitle" for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
          </div>
          <div class="field-wrapper">
            <label id="inputTitle" for="message">Mensagem</label>
            <textarea id="message" name="message" placeholder="Digite sua mensagem" rows="5" cols="40" ></textarea>
          </div>
            <button id="button" >Enviar</button> 
            <?php
    if (!empty($mensagem)) {
        echo "<p>$mensagem</p>";
    }
    ?>
        </form>

      </div>
    </div>
  </body>
</html>