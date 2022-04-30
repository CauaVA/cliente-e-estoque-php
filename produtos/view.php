<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $produto['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Produto:</dt>
	<dd><?php echo $produto['descricao']; ?></dd>

	<dt>Preço p/Unidade:</dt>
	<dd><?php echo $produto['precounit']; ?></dd>

	<dt>QTD. em Estoque:</dt>
	<dd><?php echo $produto['quantidade']; ?></dd>
	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-secondary">Editar</a>
	  <a href="index.php" class="btn btn-light">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>