<?php

// ADICIONA PRODUTO
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)
{
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado)
              VALUES ('{$nome}',{$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

// ALTERA PRODUTO
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)
{
    $query = "UPDATE produtos SET 
    nome = '{$nome}',
    preco = {$preco},
    descricao = '{$descricao}',
    categoria_id = {$categoria_id},
    usado = {$usado}
    WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}

// LISTA PRODUTOS
function listaProduto($conexao)
{
    $produtos = [];
    $resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome
        FROM produtos AS p JOIN categorias AS c ON c.id=p.categoria_id");

    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

// REMOVE PRODUTOS
function removeProduto($conexao, $id)
{
    $query = "DELETE FROM produtos WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}

// BUSCA PRODUTOS NO FORMULÁRIO DE ALTERAÇÃO
function buscaProduto($conexao, $id)
{
    $query = "SELECT * FROM produtos WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
