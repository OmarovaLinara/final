var app=angular.module('myapp',[]);
app.controller('myctrl',function($scope){
	$scope.comments = [];
  	$scope.btn_add = function(){
    	if($scope.txtcomment!=''){
      		$scope.comments.push($scope.txtcomment);
      		$scope.txtcomment = "";
    	}
  	}
  	$scope.removeItem = function($index){
    	$scope.comments.splice($index,1)
  	}
});