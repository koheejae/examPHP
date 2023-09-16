<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET 방식으로 데이터 전달하기</title>
</head>
<body>
	<?php
		$table = $_GET['table'];
		if($table == "free"){
			$board_title = "자유게시판";
		}elseif ($table == "download") {
			$board_title = "자료실";
		}elseif ($table == "notice") {
			$board_title = "공지사항";
		}else {
			$board_title = "문의게시판";
		}
	?>
	<h1><?= $board_title?></h1>
</body>
</html>