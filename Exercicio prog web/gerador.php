<?php
include('conexao.php');

for ($i = 0; $i < 10; $i++) {
    $nome = "Serviço " . ($i + 1);
    $endereco = "Endereço " . ($i + 1);
    $telefone = "Telefone " . ($i + 1);
    $descricao = "Descrição " . ($i + 1);

    $query = "INSERT INTO servico (nome, endereco, telefone, descricao) VALUES ('{$nome}', '{$endereco}', '{$telefone}', '{$descricao}')";
    mysqli_query($conexao, $query);
}

// Fechar conexão
mysqli_close($conexao);
?>