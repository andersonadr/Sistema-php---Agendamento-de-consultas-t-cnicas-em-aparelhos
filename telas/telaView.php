<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleView.css" />
    <link rel="icon" type="image/x-icon" href="../img/favi.png">
</head>

<body>
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
  
    <a href="telaCadastro.php">Cadastrar</a><br>
    <h1>Lista de Usuários</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once("../conexao/Conn.php");
    require_once("../conexao/ListUsers.php");

    $listUsers = new ListUsers();
    $result_users = $listUsers->list();

    foreach ($result_users as $row_user) {        
        extract($row_user);

        echo"Nome: $nome <br>Cpf: $cpf <br>Telefone: $telefone <br>Endereço: $endereco<hr>";
    }
    ?>
    <section class="rodape">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #23232e;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">EletroTech</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Registre-se
          </button>
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
</body>
</html>