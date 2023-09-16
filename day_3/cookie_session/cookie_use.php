<?php 
    if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) 	
    {
        $userid = $_COOKIE["userid"]; 				
        $username = $_COOKIE["username"]; 			
        echo "userid 쿠키 : " . $userid."<br>"; 			
        echo "username 쿠키 : " . $username."<br>";
    }
    else 
    {
        echo "쿠키가 생성되지 않았다!";
    }
?>
/*

① $_COOKIE[“userid”]는 [예제 8-1]의 ①에서 setcookie( ) 함수로 생성한 userid 쿠키를, $_COOKIE[“username”]은 [예제 8-1]의 ②에서 생성한 username 쿠키를 의미.
isset( ) 함수는 변수 값이 설정되어 있는지 판단. 설정되어 있으면 참, 설정되어 있지 않으면 거짓 반환.
if문 조건식은 userid, username 쿠키가 설정되어 있으면 ②~④를 실행.

② userid 쿠키의 값인 $_COOKIE[“userid”]를 $userid에 저장.

③ username 쿠키의 값인 $_COOKIE[“username”]을 $username에 저장.

④ $userid와 $username의 값을 출력.


*/