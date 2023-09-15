<?php
	$num1 = "010";
	$num2 = "1234";
	$num3 = "5678";
	$phone_number = $num1."-".$num2."-".$num3;
	echo "휴대폰 번호 : $phone_number"."<br>";

	$email1 = "admin";
	$email2 = "codingschool.info";
	$email = $email1."@".$email2;
	echo "이메일 주소 : $email";

/*
① 변수 3개에 나누어 저장된 $num1, $num2, $num3을 하나의 문자열로 만들기 위해 문자열 연결 연산자인 .를 사용. $phone_number에 문자열 010-1234-5678이 저장.

② $email1에 admin 저장, $email2에 codingschool.info 저장.

③ @ 기호를 $email1과 $email2 사이에 넣어 만든 이메일 주소를 $email에 저장.

④ 완성된 이메일 주소를 화면에 출력.
*/
?>