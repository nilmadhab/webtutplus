<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	$.ajax({
	  url: "test.php", // the ajax request goes to the url
	  type: "POST", // type can be post or get, default is get
  	  data: {id : "1"}, // we pass some data in the url
	  success: function(html){
	    $("#results").append(html); // whatever data is prinited  in 
	    							// requested url returned here  
	  }
	});
</script>

</body>
</html>