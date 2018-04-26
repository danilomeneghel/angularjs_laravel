'use strict';
var app = angular.module('cdg',[]);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});

// Service
app.factory('pessoaService',function($http) {
	return {
		lista: function(){
			return $http.get('/api/pessoas');
		},
		cadastra: function(data){
			return $http.post('/api/pessoas', data);
		},
		edita: function(data){
			var id = data.id;
			delete data.id;
			return $http.put('/api/pessoa/'+id, data);
		},
		exclui: function(id){
			return $http.delete('/api/pessoa/'+id)
		}
	}
});

// Controller
app.controller('pessoaController', function($scope, $http, pessoaService) {
	$scope.totalPages = 0;
	$scope.currentPage = 1;
	$scope.range = [];

	$scope.listar = function(pageNumber){
		if(pageNumber===undefined){
		  pageNumber = '1';
		}
		$http.get('/api/pessoas?page='+pageNumber).success(function(response) {
		  $scope.pessoas      = response.data;
		  $scope.totalPages   = response.last_page;
		  $scope.currentPage  = response.current_page;

		  // Pagination Range
		  var pages = [];

		  for(var i=1;i<=response.last_page;i++) {          
			pages.push(i);
		  }

		  $scope.range = pages;
		});
	};
	
	$scope.editar = function(data){
		$scope.pessoa = data;
		$('#myModal').modal('show');
	}

	$scope.salvar = function(){
		if($scope.pessoa.id){
			pessoaService.edita($scope.pessoa).success(function(res){
				$scope.listar();
				$('#myModal').modal('hide');
			});
		}else{
			pessoaService.cadastra($scope.pessoa).success(function(res){
				$scope.listar();
				$('#myModal').modal('hide');
			});
		}
	}

	$scope.excluir = function(data){
		if(confirm("Tem certeza que deseja excluir?")){
			pessoaService.exclui(data.id).success(function(res){
				$scope.listar();
			});
		}
	}
});
