<?php 
    setcookie("userid", "", time() - 3600); 		
    setcookie("username", "", time() - 3600); 		
?>
<html> <head> 
<meta charset="utf-8"> 
</head> 
<body> 
<?php
    {
        echo "userid와 username 쿠키가 삭제되었다!";
    }
?>
</body> </html>
/*

① setcookie( ) 함수를 이용하여 userid 쿠키에 null 값인 “ ”를 설정하면 userid 쿠키를 삭제할 수 있음. 이때 쿠키 유효 시간을 현재 시간보다 1시간 짧게 설정. 문법상으로는 쿠키 유효 시간을 과거 시간으로 설정하는 것.

② 같은 방식으로 username 쿠키를 삭제.


*/