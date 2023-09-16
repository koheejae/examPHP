<?php
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h3>등록된 세션의 사용</h3>
	<ul>
		<li>등록된 세션(userid) : <?= $userid?></li>
		<li>등록된 세션(username) : <?= $username?></li>
	</ul>
</body>
</html>