<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/styleMenu.css" />
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
    $result = $createUser->create();

    if ($result) {
      echo "Usuário cadastrado com sucesso!";
    } else {
      echo "Usuário não cadastrado";
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

  <div class="clearfix">
    <img src="../img/inicio.png" class="col-md-7 float-md-end mb-6 ms-md-6" alt="img">
    <center>
      <h1>Está tendo problemas com algum eletronico? <br>Venha para a EletroTech! <br>Nós concertamos seus eletrónicos com um ótimo preço e bastante agilidade</h1>
      <br><br>
      <a href="telaAgendamento.php"><button><b>AGENDE SUA CONSULTA</b></button></a>
    </center>
  </div>

  
  <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #23232e;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
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