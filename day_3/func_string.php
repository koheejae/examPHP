<?php
	// 문자열 관련 내장 함수 사용해보기

	$tel = "010-2777-3333"; 
    echo "\$tel : $tel<br>"; 
    $num_tel = strlen($tel);  	// 문자열의 길이 계산				

    echo "\$tel의 길이 : $num_tel<br>"; 					

    $tel1 = substr($tel, 0, 3);	// 앞에서 3개의 문자 가져오기 			
    echo "$tel1<br>";  
    $tel2 = substr($tel, 4, 4); 	// 네 번째 문자에서 4개의 문자 가져오기 		
    echo "$tel2<br>";  
    $tel3 = substr($tel, 9, 4); 	// 아홉 번째 문자에서 4개의 문자 가져오기 		
    echo "$tel3<br>"; 

    $phone = explode("-", $tel); // 하이픈(-)을 기준으로 문자열 분리		

    echo "전화번호 : $phone[0] $phone[1] $phone[2]<br>"; 			

    /*
		문자열 내장 함수는 자바에서와 메소드명이 비슷하지만 동일하지 않으므로 자주 쓰이게 될 메소드는 새로 외우는 것이 인생 편할 것으로 보임.
		explode() 특정 문자를 기준으로 문자열 나누기
		str_len() 문자열의 길이 얻기
		substr() 문자열에서 일부 문자 추출(Substring)
		nl2br() 행 바꿈(\n)을 <br>태그로 바꾸기 *
		sprintf() 문자열을 특정 양식에 맞추기
    */
?>
