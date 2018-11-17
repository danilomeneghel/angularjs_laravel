'use strict';

var app = angular.module('cdg',['ui.bootstrap']);
var url_base = window.location.href;

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});

// Service
app.factory('pessoaService',function($http) {
	return {
		lista: function(){
			return $http.get(url_base+'/../api/pessoas');
		},
		cadastra: function(data){
			return $http.post(url_base+'/../api/pessoas', data);
		},
		edita: function(data){
			var id = data.id;
			delete data.id;
			return $http.put(url_base+'/../api/pessoa/'+id, data);
		},
		exclui: function(id){
			return $http.delete(url_base+'/../api/pessoa/'+id)
		}
	}
});

// Controller
app.controller('pessoaController', function($scope, $http, pessoaService) {
	$scope.listar = function(){
		pessoaService.lista().success(function(res){
			$scope.pessoas = res;
		});
	};

	$scope.cadastrar = function(){
		$scope.pessoa = null;
		$('#modalTitle').html('Cadastrar Pessoa');
		$('#modal').modal('show');
	}

	$scope.editar = function(data){
		$scope.pessoa = data;
		$('#modalTitle').html('Editar Pessoa');
		$('#modal').modal('show');
	}

	$scope.salvar = function(){
		if($scope.pessoa.id){
			pessoaService.edita($scope.pessoa).success(function(res){
				$scope.listar();
			});
		}else{
			pessoaService.cadastra($scope.pessoa).success(function(res){
				$scope.listar();
			});
		}

		$scope.pessoa = null;
		$('#modal').modal('hide');
	}

	$scope.excluir = function(data){
		if(confirm("Tem certeza que deseja excluir?")){
			pessoaService.exclui(data.id).success(function(res){
				$scope.listar();
			});
		}
	}
});
