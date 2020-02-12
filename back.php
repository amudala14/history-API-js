<!DOCTYPE html>
<html>
<head>
	<title>Back</title>
</head>
<body>
	<a href="index.php">index</a>
	<a href="contact.php">contact</a>
	<button id="back">Back</button>


</body>


<script type="text/javascript">
	document.querySelector('#back').addEventListener('click' , function () {
		window.history.back()
	})
</script>




</html>