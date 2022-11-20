<?php
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaR = $_POST['senhaR']; 
    $result =  mysqli_query($conexao, "INSERT INTO  usuarios(nome, email, senha, senhaR) VALUES('$nome','$email','$senha', '$senhaR')");
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="cadastro.css">
</head>
<body>
</div>
  <div class="content">
    <h1>Cadastro</h1>
    <form action = "cadastro.php" method= "POST">
      <form id="form">
        <div>
            <input type="text" name= "nome" id ="nome" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
            <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
        </div>
        <div>
            <input type="email" name= "email" id="email" placeholder="Digite seu email" class="inputs required" oninput="emailValidate()">
            <span class="span-required">Digite um email válido</span>
        </div>
        <div>
            <input type="password" name= "senha" id= "senha" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
            <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
        </div>
        <div>
            <input type="password" name= "senhaR" id= "senhaR" placeholder="Repita a sua senha" class="inputs required" oninput="comparePassword()">
            <span class="span-required">Senhas devem ser compatíveis</span>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
<script>
    const form   = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans  = document.querySelectorAll('.span-required');
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate();
        comparePassword();
    });

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate(){
        if(campos[0].value.length < 3)
        {
            setError(0);
        }
        else
        {
            removeError(0);
        }
    }

    function emailValidate(){
        if(!emailRegex.test(campos[1].value))
        {
            setError(1);
        }
        else
        {
            removeError(1);
        }
    }

    function mainPasswordValidate(){
        if(campos[2].value.length < 8)
        {
            setError(2);
        }
        else
        {
            removeError(2);
            comparePassword();
        }
    }

    function comparePassword(){
        if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
        {
            removeError(3);
        }
        else
        {
            setError(3);
        }
    }
</script>
</html>