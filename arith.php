<?php
	$a = 3; //$a에 3 저장
	$b = 5; //$b에 5 저장

	$c = $a + $b;
	$c++;

	$c = $c + $a;
	$d = $a + $c * $b;

	echo "\$d : $d"; // \$는 이스케이프 문자로 $ 기호를 브라우저에 출력
	echo "<br>";

	$a = 10; //$a에 10 저장
	$b = $a % 3;
	$b--;

	$c = $a - $b;
	$c = $c - 5;

	echo "\$c : $c";

/*
① $a(3)와 $b(5)를 더한 결과 값 8을 $c에 저장.
② $c 값을 1 증가하여 9 저장.
③ $c(9)와 $a(3)를 더한 결과 값 12를 $c에 저장.
④ $c(12)와 $b(5)를 곱한 뒤 $a(3)를 더한 결과 값 63을 $d에 저장.
⑤ echo문으로 $d 값인 63을 화면에 출력. \$는 이스케이프 문자로 $ 기호 출력하라는 의미.
⑥ $a % 3은 10 % 3이므로 결과 값 1을 변수 $b에 저장.
⑦ $b 값을 1 감소시켜 $b에 0 저장.
⑧ $a(10)에서 $b(0)를 뺀 결과 값 10을 $c에 저장.
⑨ $c(10)에서 5를 뺀 결과 값 5를 다시 $c에 저장.
⑩ echo문으로 $c 값인 5를 화면에 출력.

*/



?>