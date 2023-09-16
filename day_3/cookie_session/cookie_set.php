<?php
	$a = setcookie("userid", "rubato");
	$b = setcookie("username","고희재", time()+60);

	if($a and $b){
		echo "쿠키 'userid'와 'username' 생성 완료!<br>";
		echo "쿠키 'username'은 60초(1분)간 지속됨!";
	}
	/*
	
① setcookie( ) 함수를 이용하여 userid라는 쿠키에 문자열 ‘rubato’를 저장.
Setcookie( ) 함수의 실행이 성공하면 true를 반환하고 실패하면 false를 반환.
$a를 확인함으로써 쿠키가 제대로 생성되었는지 알 수 있음.

② username 쿠키에 ‘고희재’ 저장. 60초(1분)간 유효. 쿠키가 제대로 생성되면 $b는 true 값을 가짐.

③ if문 조건식인 $a and $b가 참이면 ④를 실행.

④ 특별한 문제가 없는 한 쿠키가 생성되고 echo문의 내용이 출력.

	*/
?>