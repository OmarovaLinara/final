<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
	input,textarea{
		display: block;
		margin-bottom: 10px;
		}
</style>
	<title></title> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".sub").click(function(){
				var name = document.getElementById("name").value;
				var mail = document.getElementById("mail").value;
				var mess = document.getElementById("mess").value;

					$.ajax({
						url:'ajax.php',
						type: 'post',
						data: {name: name, mail: mail, mess: mess},
						success: function(data){
							$("#data").html(data);
						}

					})
				})
			})	
	</script>

</head>
<body>

	<form action="ajax.php" method="post" onsubmit="return false">
		<input type="text" name="name" class="name" id="name" />
		<input type="text" name="mail" class="mail" id="mail" />
		<textarea cols="60" rows="9" name="mess" class="message" id="mess"></textarea>
		<input type="submit" class="sub" name="sub"/>
	</form>
	<div id="data"></div>
</body>
</html>