<?php
	session_start();
	unset($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>세션 삭제하기</title>
</head>
<body>
	<ul>
		<li><?= "userid 세션: ".$_SESSION["userid"]."<br>"?></li>
		<li><?= "username 세션: ".$_SESSION["username"]."<br>"?></li>
		<li><?= "username 세션이 삭제되었습니다!" ?></li>
	</ul>
</body>
</html>

<!-- ① session_start( )로 세션 시작. 

② unset( ) 함수를 사용하여 username 세션 삭제. 

③ 실행 결과의 첫 번째 줄에 userid 세션 값 출력.

④ username 세션 값 출력. 하지만 ②에서 username 세션이 삭제되었으므로 $_SESSION의 username 인덱스가 정의되지 않았다는 오류 메시지가 나타남.

unset( ) 함수는 입력 값으로 주어지는 세션 변수나 변수의 존재를 파괴할 때 사용. 
mixed는 다양한 변수형이 사용될 수 있다는 것을 의미.

[TIP] 세션 변수를 한꺼번에 삭제할 때는 session_unset( )을 사용.
 -->