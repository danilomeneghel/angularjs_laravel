@extends('layouts.app')

@section('content')
<div ng-controller="pessoaController">
	<div class="container" ng-init="listar()">
		<div class="row">
			<div class="col-md-12">
				<h2>Cadastro de Pessoas</h2>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="row">
				<div class="col-md-7">
					<button type="button" class="btn btn-primary" ng-click="cadastrar()">Nova Pessoa</button>
				</div>
				<div class="col-md-5">
					<div class="inner-addon left-addon">
						<i class="fa fa-search"></i>
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
							<tr ng-repeat="pessoa in filterData = (pessoas | filter: pesquisar) | limitTo: 5:5*(page-1)">
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
					<div class="row">
						<div class="pagination-left">
							Total de Registros: <%filterData.length%>
						</div>
						<div class="pagination-right">
							<uib-pagination class="pagination-sm pagination" total-items="filterData.length" ng-model="page"
											previous-text="&lsaquo;" next-text="&rsaquo;" items-per-page=5></uib-pagination>
						</div>
					</div>
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
</div>
@endsection