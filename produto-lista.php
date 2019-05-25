<?php
include("header.php");
include("conecta.php");
include("banco-produto.php");

// REMOVIDO COM SUCESSO
if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true'): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        O produto foi removido com sucesso
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Remover</th>
    </tr>
    </thead>

    <?php
    $produtos = listaProduto($conexao);
    foreach ($produtos as $produto):
        ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 110) ?></td>
            <td><?= $produto['categoria_nome'] ?></td>
            <td>
                <a href="produto-altera-formulario.php?id=<?= $produto['id'] ?>"><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
            </td>
            <td>
                <a href="remove-produto.php?id=<?= $produto['id'] ?>"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?php include("footer.php") ?>
