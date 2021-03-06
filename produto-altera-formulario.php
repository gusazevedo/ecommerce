<?php
include("header.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h2 class="border-bottom pb-2 mb-4">Formulário de cadastro de produto</h2>
<form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nomeP">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>">
        </div>
        <div class="form-group col-md-4">
            <label for="precoP">Preço</label>
            <input type="text" class="form-control" id="precoP" name="preco" value="<?= $produto['preco']?>">
        </div>
    </div>
    <div class="form-group">
        <label for="descricaoP">Descrição</label>
        <textarea class="form-control" name="descricao" id="descricaoP" cols="30" rows="2"></textarea>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="categoriaP">Categoria</label>
            <select id="categoriaP" class="form-control" name="categoria_id">

                <?php 
                    foreach ($categorias as $categoria) :
                        $categoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $categoriaSelecionada ? "selected='selected'" : "";
                 ?>

                    <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
                        <?= $categoria['nome'] ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>
    </div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" <?= $usado?> class="custom-control-input" name="usado" id="novoP" value="true" >
        <label class="custom-control-label" for="novoP">Produto novo</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<?php include("footer.php") ?>
