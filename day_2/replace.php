<?php
	
	$a = 5; //$a에 5를 대입
	echo $a."<br>";

	$a += 3; // $a = $a + 3과 동일
	echo $a."<br>";

	$a -= 4; // $a = $a - 4와 동일
	echo $a."<br>";

	$a *= 2; // $a = $a * 2와 동일
	echo $a."<br>";

	$a %= 2; // $a = $a % 2와 동일
	echo $a."<br>";

	$a = "딸기";
	$a .= "주스"; // $a = $a."주스"와 동일
	echo $a."<br>";

/*
① $a에 5 저장.
② $a의 값 5를 화면에 출력, 줄 바꿈.
③ $a의 값 5에 3을 더한 결과 값 8을 다시 $a에 저장.
④ $a의 값 8에서 4를 뺀 결과 값 4를 다시 $a에 저장.
⑤ $a의 값 4에 2를 곱한 결과 값 8을 다시 $a에 저장.
⑥ $a의 값 8을 4로 나눈 결과 값 2를 다시 $a에 저장.
⑦ $a의 값 2를 2로 나눈 나머지 값 0을 다시 $a에 저장.
⑧ 문자열 $a의 값인 ‘딸기’와 ‘주스’를 하나로 연결한 문자열 ‘딸기 주스’를 다시 $a에 저장.

*/
?>
