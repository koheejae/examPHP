<?php
	$name = "안지영";
	// echo "$name님 반갑습니다!"; //변수명 달라짐!($name님)
	echo "{$name}님 반갑습니다!"; //변수명과 문자열을 붙여서 출력하려면 변수명을 중괄호로 감싸야 함!

	// echo "<img src = "cat.jpg">"; //자바에도 있는 에러, 큰따옴표 안에 큰따옴표를 사용할 때 작은 따옴표나 \" 를 사용하여 에러 방지!

	echo "<img src = 'cat.jpg'>";

?>
