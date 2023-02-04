<?php
if (isset($_POST["botao-submit"])) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $repetirsenha = $_POST['repetirsenha'];

  $hash = md5($senha);
  ?>


    <div class="space-insert">

<?php
    include_once 'connect.php';
    $sql_verificar = "SELECT * FROM usuario WHERE usuario = '$usuario'";

    $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$hash')";

    if (mysqli_num_rows(mysqli_query($connection, $sql_verificar)) > 0) {
      echo "Usuário já cadastrado!
  <a href='index.php'>Voltar</a>
  ";
    } else {
      if (($senha != "") && ($senha == $repetirsenha)) {
        if ($result = mysqli_query($connection, $sql)) {
          echo "Usuário cadastrado com sucesso.
        <a href='entrar.php'>login</a>
      ";
        } else {
          echo "Erro ao cadastrar usuário.
        <a href='index.php'>Voltar</a>
        ";
        }
      } else {
        echo "A senha está em branco ou não confere com a sua correspondente
      <a href='index.php'>Voltar</a>";
      }
    }
}

?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="cadastro.css" rel="stylesheet" /> 
  <title>Cadastro</title>
  
</head>
<body>
</div>
  <div class="content">
    <h1>Cadastro</h1>
<form action = "cadastro.php" method= "POST">

    <div class="field">
    <div class="field-label">
        Login
    </div>
    <div class="field-data">
        <input type="text" id="usuario" name="usuario" placeholder="Digite o usuario" size="40">
    </div>
    </div>

    <div class="field">
    <div class="field-label">
        Senha
    </div>
    <div class="field-data">
        <input type="text" id="senha" name="senha" placeholder="Digite a senha" size="30">
    </div>
    </div>      

    <div class="field">
    <div class="field-label">
        Repetir a senha
    </div>
    <div class="field-data">
        <input type="text" id="repetirsenha" name="repetirsenha" placeholder="Digite a senha novamente" size="30">
    </div>
    </div>      

    <div class="button-container">
        <input type="submit" class="submit-button" id="botao_submit" name="botao-submit"
        value="Cadastrar">
    </div>
</form>
</body>
</html>