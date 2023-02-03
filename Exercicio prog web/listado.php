<?php
include('verifica_login.php');
include('conexao.php');

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
    exit;
}

$id_usuario = $_SESSION['id_usuario'];

$query_servicos = "SELECT nome, endereco, telefone, descricao, id FROM servico";
$result_servicos = mysqli_query($conexao, $query_servicos);

$dados = "";
while ($row_servico = mysqli_fetch_assoc($result_servicos)) {
    $dados .= "<tr>
                    <td>".$row_servico['nome']."</td>
                    <td>".$row_servico['endereco']."</td>
                    <td>".$row_servico['telefone']."</td>
                    <td>".$row_servico['descricao']."</td>
                    <td><a href='aceitar_servico.php?id_servico=".$row_servico['id']."'>Aceitar</a></td>
                </tr>";
}

echo "<table border='1'><thead>
      <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>".$dados."</tbody></table>";

// Fechar conexão
mysqli_close($conexao);
?>
// arquivo aceitar_servico.php

<?php
include('conexao.php');
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
    exit;
}

$id_servico = $_GET['id_servico'];
$id_usuario = $_SESSION['id_usuario'];

$query = "UPDATE servico SET id_usuario = '$id_usuario' WHERE id = '$id_servico'";
mysqli_query($conexao, $query);

header('Location: servicos.php');
exit;

// mysqli_close($conexao);
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h3><a href="logout.php">Sair</a></h3>