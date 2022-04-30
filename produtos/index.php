<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>
    <header>
        <div class="row" id="actions">
            <div class="col-sm-6">
                <h2>Produtos</h2>
            </div>
            <div class="col-sm-6 text-right h2" style="text-align: right;">
                <a class="btn btn-secondary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
                <a class="btn btn-light" href="index.php"><i class="fa fa-sync"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php clear_messages(); ?>
    <?php endif; ?>

    <hr>

    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th width="30%">Produto</th>
            <th>Preço p/Unidade</th>
            <th>QTD. em Estoque</th>
            <th>Opções</th>
        </tr>
    </thead>
        <tbody>
        <?php if ($produtos) : ?>
        <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?php echo $produto['id']; ?></td>
                <td><?php echo $produto['descricao']; ?></td>
                <td><?php echo $produto['precounit']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>

                <td class="actions text-right">
                    <a href="view.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-secondary"><i class="fa fa-eye fa-w-18"></i> Visualizar</a>
                    <a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-light"><i class="fas fa-edit fa-w-18"></i></i> Editar</a>
                    <a href="#" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#delete-modal-produto" data-produto="<?php echo $produto['id']; ?>">
                        <i class="fa fa-trash fa-w-18"></i> Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum produto encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <?php include('modal.php'); ?>
    
<?php include(FOOTER_TEMPLATE); ?>