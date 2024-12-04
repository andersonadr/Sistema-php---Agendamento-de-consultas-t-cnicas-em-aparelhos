<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/styleAgendamento.css"/>
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
    $result = $createUser->agendamento();

    if ($result) {
      echo '<script>alert("Ordem de serviço cadastrada com sucesso!");location.href="index.php";</script>';
    } else {
      echo '<script>alert("Orgem de serviço não cadastrado!");location.href="telaAgendamento.php.php";</script>';
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
    <center><h3>AGENDAMENTO</h3></center>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><b>Nome</b></span>
  <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" aria-label="Username" id="txtfieldnome" aria-describedby="addon-wrapping">
</div><br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><b>Telefone</b></span>
  <input name="telefone" type="text" class="form-control" placeholder="(00)0000-0000" aria-label="Username" id="txtfieldcpf" aria-describedby="addon-wrapping">
</div><br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><b>Endereço</b></span>
  <input name="endereco" type="text" class="form-control" placeholder="Rua palmodel - 69" aria-label="Username" id="txtfieldsenha" aria-describedby="addon-wrapping">
</div><br>
<label for="cars"><b>Tecnico a sua escolha</b></label>
  <select name="nomeTecnico" id="cars">
    <option value="Anderson Adriel">Anderson Adriel</option>
    <option value="João Victor">João Victor</option>
    <option value="Luiz Davi">Luiz Davi</option>
  </select><br><br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><b>Data</b></span>
  <input name="dia" type="date" class="form-control" placeholder="Rua palmodel - 69" aria-label="Username" id="txtfieldendereco" aria-describedby="addon-wrapping">
</div>
<label for=""><b>Escolha qual serviço você precisa</b></label><br>
<input type="radio" name="escolha" value="VT - R$149,99"> Visita tecnica  - R$149,99<br>
<input type="radio" name="escolha" value="OS - R$250,00"> Ordem de serviço - R$250,00
<br>
<label for="cars"><b>Forma de pagamento</b></label>
  <select name="pagamento" id="cars2">
    <option value="PIX">PIX</option>
    <option value="CARTÂO">CARTÂO</option>
    <option value="DINHEIRO">DINHEIRO</option>
  </select><br>
    <label for="exampleFormControlTextarea1" class="form-label"><b>Descrição do problema</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea" rows="3" name="descricao" placeholder="Deixe aqui seu problema"></textarea>
    <br>

<input name="addUser" type="submit" class="btn btn-primary mb-3" class="btn" value="AGENDAR">
<a href="index.php"><input type="button" value="CANCELAR" id="btn" class="btn btn-primary mb-3"></a>

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