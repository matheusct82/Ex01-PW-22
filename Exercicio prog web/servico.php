<?php
include_once 'header.php';
if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['descricao'])) {
  include('conexao.php');
  $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
  $endereco = mysqli_real_escape_string($conexao, $_POST["endereco"]);
  $telefone = mysqli_real_escape_string($conexao, $_POST["telefone"]);
  $descricao = mysqli_real_escape_string($conexao, $_POST["descricao"]);

  $sql = "INSERT INTO servico (nome, endereco, telefone, descricao) VALUES ('$nome', '$endereco', '$telefone', '$descricao')";

  if (mysqli_query($conexao, $sql)) {
      echo "Serviço cadastrado com sucesso.";
  } else {
      echo "Erro ao cadastrar o serviço: " . mysqli_error($conexao);
  }

   mysqli_close($conexao);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="servico.css" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
<form action="servico.php" method="post">
  <div>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
  </div>
  <div>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco">
  </div>
  <div>
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone">
  </div>
  <div>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao"></textarea>
  </div>
  <button type="submit">Cadastrar</button>
</form>
</body>
</html>