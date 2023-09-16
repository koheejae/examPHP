<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>세션 시작하고 등록하기</title>
</head>
<body>
	<?php
		session_start();
		echo "세션 시작!!!<br>";

		$_SESSION['userid'] = "ocella";
		$_SESSION['username'] = "고희재";
		echo '세션 등록 완료!!!<br>';
		echo $_SESSION['userid']."<br>";
		echo $_SESSION['username']."<br>";

		/*

① 세션 초기화
세션을 사용하려면 반드시 session_start( )로 초기화해야 함.
② 세션 등록
세션 변수 userid와 username 등록.
배열 형태의 전역 변수인 $_SESSION[ ]의 인덱스에 세션 변수의 이름을 넣어 등록.
userid를 등록하기 위해 $_SESSION[‘userid’]에 ocella 입력, username을 등록하기 위해 $_SESSION[‘username’]에 ‘고희재’ 입력.
③ 세션 변수 출력
등록한 2개의 세션 변수를 출력.

		*/
	?>
</body>
</html>