<?php

	$h = 175;
	$w = 80;
	$a = ($h - 100) * 0.9;

	echo "키 : $h <br>";
	echo "몸무게 : $w <br>";

	if($w > $a)
		echo "체중 조절이 필요합니다.<br>";
	else
		echo "체중 조절이 필요하지 않습니다.<br>";

?>
