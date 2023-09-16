<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>고양이와 토끼</title>
</head>
<body>
<h3>
	<?php
		echo "고양이와 토끼";
	?>
</h3>
<?php
	$filename = "cat.jpg";
	echo "<img src = '$filename'style='width:200px; height:100px;'>";
	echo "<br>";

	$filename = "rabbit.jpg";
	echo "<img src = '$filename'style='width:200px; height:100px;'>";
?>
</body>
</html>
