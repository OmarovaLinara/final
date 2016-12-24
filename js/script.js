$(document).ready(function() {

  $('#block-cart > p').toggle(
       function() {
           $('#block-cart > div').show();
           $('#corner').attr("class","corner-up");
           
       },
       function() {
           $('#block-cart > div').hide();
           $('#corner').attr("class","corner-down");
       }
);
    
var newcount = 0;

$('.add-tovar').click(function(){
  
var allprice = $('#block-cart span#price').attr("price");
var price = $(this).attr("price");
    
newprice = Number(allprice) + Number(price); 
newcount ++;

$('#block-cart span#price').html(newprice).attr("price",newprice);
$('#block-cart span.count').html(newcount);
});  

});


$(document).ready(function() {

	// Gallery
	(function() {

		var items = $('#gallery .items')
		var counter = 0;
		var imgWidth = parseInt($('#gallery .wrapper').css('width'));
		var total = items.find('.item').length;

		items.css('width', total * 164);

		function move(direction) {

			if (direction == 'right' && counter < total - 1)
				counter += 1;
			else if (direction == 'left' && counter > 0)
				counter -= 1;

			items.stop().animate({'margin-left': - 164 * counter}, 300);

		}

		$('.controller').click(function() {
			if ($(this).hasClass('left'))
				move('left');
			else
				move('right');
			return false;
		});

		setInterval(function() {
			if (counter == total - 1)
				counter = -1;
			move('right');
		}, 2000);


	})();

});


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