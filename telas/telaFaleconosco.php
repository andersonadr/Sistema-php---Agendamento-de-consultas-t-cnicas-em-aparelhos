<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fale Conosco</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/styleFaleconosco.css"/>
  <link rel="icon" type="image/x-icon" href="../img/favi.png">
</head>

<body>

  <?php
  require_once("../conexao/Conn.php");
  require_once("../conexao/User.php");



  // Recebendo os valores em forma de array
  $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  // Verificando se o botão de cadastro foi acionado
  if (!empty($formData['addUser'])) {
    //Criando novo objeto e setando ao atributo formData o array
    $createUser = new User();
    $createUser->formData = $formData;
    $result = $createUser->adicionarcomentario();

    if ($result) {
      echo '<script>alert("Comentário enviado com sucesso!");location.href="index.php";</script>';
    } else {
      echo '<script>alert("Falha ao enviar o comentário!");location.href="telaFaleconosco.php";</script>';
    }
  }
  ?>
  <header>
    <nav>
      <a class="logo" href="index.php">Eletro Tech</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="telaAgendamento.php">Faça seu agendamento</a></li>
        <li><a href="telaFaleconosco.php">Fale conosco</a></li>
        <li><a href="telaDuvidas.php">Dúvidas frequentes</a></li>
        <li><a href="telaCadastro.php">Registrar</a></li>
        <li><a href="telaLogar.php">Logar</a></li>
      </ul>
    </nav>
  </header>
  <main></main>

  <form name="createUser" method="POST">
    <div class="mb-2">
      <center><h3>FALE CONOSCO</h3></center>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Comentário</label>
        <textarea class="form-control" id="exampleFormControlTextarea" rows="3" name="mensagem" placeholder="Deixe aqui seu comentário"></textarea>
      </div>
      <div class="mb-3">
      <input name="addUser" type="submit" class="btn btn-primary mb-3" class="btn" value="CADASTRAR">
      <a href="index.php"><input type="button" value="CANCELAR" id="btn" class="btn btn-primary mb-3"></a>
      </div>
    </div>
  </form>
  
  <section class="rodape">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #23232e;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">
        <a href="telaCadastro.php"></a>EletroTech</span>
        <a href="telaCadastro.php"><button type="button" class="btn btn-outline-light btn-rounded">
            Registre-se
          </button></a>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Desenvolvido por ADV.Company
      <br><a class="text-white" href="../telas/telaSobre.php">Sobre Nós</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>


  <script src="../js/mobile-navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>