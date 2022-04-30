<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $produto['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Produto</label>
      <input type="text" class="form-control" name="produto['descricao']" value="<?php echo $produto['descricao']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Preço p/Unidade</label>
      <input type="text" class="form-control" name="produto['precounit']" value="<?php echo $produto['precounit']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">QTD. em Estoque</label>
      <input type="text" class="form-control" name="produto['quantidade']" value="<?php echo $produto['quantidade']; ?>">
    </div>

  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-secondary">Salvar</button>
      <a href="index.php" class="btn btn-light">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>