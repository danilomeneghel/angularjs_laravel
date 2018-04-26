app.directive('pagination', function(){  
   return{
	  restrict: 'E',
	  template: '<ul class="pagination">'+
		'<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="listar(1)">«</a></li>'+
		'<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="listar(currentPage-1)">‹ Prev</a></li>'+
		'<li ng-repeat="i in range" ng-class="{active : currentPage == i}">'+
			'<a href="javascript:void(0)" ng-click="listar(i)">{{i}}</a>'+
		'</li>'+
		'<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="listar(currentPage+1)">Next ›</a></li>'+
		'<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="listar(totalPages)">»</a></li>'+
	  '</ul>'
   };
});
