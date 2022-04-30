<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/add.php" class="btn btn-secondary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2" style="margin-bottom: 20px">
		<a href="customers" class="btn btn-light">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-17 col-sm-3 col-md-2">
		<a href="produtos/add.php" class="btn btn-secondary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fas fa-box-open fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Produto</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="produtos" class="btn btn-light">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fas fa-boxes fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Visualizar Produtos</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>