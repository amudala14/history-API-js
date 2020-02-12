<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<button id="back">Back</button>
	<button id="next">Nex</button>

</body>


<script type="text/javascript">
	document.querySelector('#back').addEventListener('click' , function () {
		window.history.back()
	})

	document.querySelector('#next').addEventListener('click' , function () {
		window.history.forward()
	})
</script>

</html>