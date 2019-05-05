<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		function load_ajax()
		{
			$.ajax({
				url: "result.php",
				type: "post",
				dataType:"text",
				data:{

				},
				success: function (result)
				{
					$('#res').html(result);
				}
			});
		}
	</script>
</head>
<body>
	<div id="res">
		 Nội dung ajax sẽ được load ở đây
	</div>
	<input type="submit" onclick="load_ajax()" value="click me">
</body>
</html>