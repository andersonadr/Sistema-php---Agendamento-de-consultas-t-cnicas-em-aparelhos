<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleLogar.css"/>
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
        $result = $createUser->login();

        if ($result) {
            echo '<script>alert("Logado com sucesso!");location.href="index.php";</script>';
        } else {
            echo '<script>alert("CPF ou SENHA inválidos!");location.href="telaLogar.php";</script>';
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

    <div class="container">
            <h3>LOGIN</h3>

        <form name="createUser" method="POST" id="form">

            <div id="formul1" class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">CPF</span>
                <input name="cpf" type="text" class="form-control" placeholder="123.321.213-31" aria-label="Username" id="cpf" aria-describedby="addon-wrapping" required>
            </div><br>

            <div id="formul2" class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Senha</span>
                <input name="senha" type="password" class="form-control" placeholder="@senha#forte!" aria-label="Username" id="senha" aria-describedby="addon-wrapping" required>
            </div><br>

            <input type="submit" value="LOGAR-SE" class="btn btn-primary mb-3" id="btnlogar" name="addUser">
            <a href="telaCadastro.php"><button class="btn btn-primary mb-3" id="btnregister" type="button">REGISTRAR</button></a>
            <a href="index.php"><button class="btn btn-primary mb-3" id="btnvoltar" type="button">VOLTAR</button></a>
        </form>
    </div>
    <section class="rodape">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #23232e;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">EletroTech</span>
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