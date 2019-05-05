<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		function load_ajax(){
                $.ajax({
                    url : "result.php?id=" + $('#number').val(),
                    type : "get",
                    dataType:"text",
                    success : function (result){
                        $('#res').html(result);
                    }
                });

            }
	</script>
</head>
<body>
	<div id="res">
		Nội dung sẽ load ở đây
	</div>
	<br/>
	<input type="text" id="number">
	<input type="button" name="submit" onclick="load_ajax()"  value="Submit" id="clickme">
</body>
</html>