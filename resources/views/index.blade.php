<!DOCTYPE html>
<html ng-app="cdg">
<head>
	<title>Cadastro de Pessoas</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">

	<script type="text/javascript" src="assets/jquery/jquery.js"></script>
	<script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Angular -->
	<script type="text/javascript" src="assets/angular/angular.js"></script>

	<!-- App -->
	<script type="text/javascript" src="app/app.js"></script>

	<!-- Pagination -->
	<script type="text/javascript" src="app/pagination.js"></script>
</head>
<body ng-controller="pessoaController">
	<div class="container" ng-init="listar()">
		<div class="row">
			<div class="col-md-12">
				<h1>Cadastro de Pessoas</h1>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-7">
				<button type="button" class="btn btn-primary" ng-click="cadastrar()">Nova Pessoa</button>
			</div>
			<div class="col-md-5">
				<div class="inner-addon left-addon">
				    <i class="glyphicon glyphicon-search"></i>
				    <input type="text" class="form-control" placeholder="Pesquisar" ng-model="pesquisar" />
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th width="120">Ação</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="pessoa in pessoas | filter: pesquisar">
							<td><%pessoa.id%></td>
							<td><%pessoa.nome%></td>
							<td><%pessoa.email%></td>
							<td>
								<button class="btn btn-info btn-xs" ng-click="editar(pessoa)">Editar</button>
								<button class="btn btn-danger btn-xs" ng-click="excluir(pessoa)">Excluir</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="pull-right">
					<pagination></pagination>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modalTitle"></h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nome:</label>
						<input type="text" class="form-control" ng-model="pessoa.nome">
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input type="email" class="form-control" ng-model="pessoa.email">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="pessoa={}">Cancelar</button>
					<button type="button" class="btn btn-primary" ng-click="salvar()">Salvar</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
