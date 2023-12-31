<?php
	$num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);
	$count = 10;

	echo "정렬 전 : ";
	for ($a = 0; $a < 10; $a++){
		echo $num[$a]." ";
	}

	echo "<br>";

	for($i = $count-2; $i >= 0; $i--){ // $i는 8부터 0까지 1씩 감소
		for($j = 0; $j <= $i; $j++){ // $j는 0부터 $i까지 1씩 증가
			if($num[$j] > $num[$j+1]){  // 인접한 두 수 비교
				$tmp = $num[$j];	// 앞의 데이터를 $tmp에 잠시 대피
				$num[$j] = $num[$j+1];// 뒤의 데이터를 앞의 배열 원소에 저장
				$num[$j+1] = $tmp;	// $tmp를 뒤의 배열 원소에 저장   
			}
		}
	}

	echo "버블 정렬(오름차순) 후 : ";

	for($a = 0; $a < 10; $a++)	// 버블 정렬 후 배열의 원소 출력
	echo $num[$a]." ";

	/*
	이때까지 하면서 느낀점 : java와 다른 부분들에 초점을 두고 예문을 작성하였는데, if, for 등 조건문 이후 실행문으로 진입할 시 
	중괄호가 없어도 정상 작동 한다는 것, 오히려 편하다기보다 어느 경계까지 메소드의 영역인지 헷갈리기 때문에 중괄호 없이 작동한다 
	하더라도 개인프로젝트가 아닌 이상 다른사람을 헷갈리게 할 수도 있겠다 싶기 때문에 중괄호 사용을 하는것이 가독성 등의 이유로 용이할 듯 싶음.
	*/
?>