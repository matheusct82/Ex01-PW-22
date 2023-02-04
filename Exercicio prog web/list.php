<?php
session_start();
include('conexao.php');
include_once 'header.php'; 

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    echo "Bem-vindo, " . $_SESSION['username'];
}
$query_servicos = "SELECT nome, endereco, telefone, descricao FROM servico";
$result_servicos = mysqli_query($conexao, $query_servicos);

$dados = "";
while ($row_servico = mysqli_fetch_assoc($result_servicos)) {
    $dados .= "<tr>
                    <td>".$row_servico['nome']."</td>
                    <td>".$row_servico['endereco']."</td>
                    <td>".$row_servico['telefone']."</td>
                    <td>".$row_servico['descricao']."</td>
                </tr>";
}

 echo "<table border='1'><thead>
       <tr>
         <th>Nome</th>
         <th>Endereço</th>
         <th>Telefone</th>
         <th>Descrição</th>
       </tr>
     </thead>
     <tbody>".$dados."</tbody></table>";

// Fechar conexão
mysqli_close($conexao);
?>
<style>
  table {
    width: 100%;
    color: #687089;
    background-color: #eff1f8;
    border-collapse: collapse;
  }
  
  thead {
    background-color: rgb(8, 48, 158);
    color: #fff;
  }
  
  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #687089;
  }
  
  th {
    font-weight: bold;
  }
  
  tr:nth-child(even) {
    background-color: #fff;
  }
  
  tr:hover {
    background-color: #007bff;
    color: #fff;
  }
</style>