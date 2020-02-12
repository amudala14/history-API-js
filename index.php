<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<a href="back.php">next</a>
	<button id="next">Nex</button>


	<script type="text/javascript">
	document.querySelector('#next').addEventListener('click' , function () {
		window.history.forward()
	})
</script>

</body>
</html>