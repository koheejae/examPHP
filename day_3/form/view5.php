<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<ul>
		<li>나의 취미 : 
			<?php
				if(isset($_POST['hobby']) && !empty($_POST['hobby'])){ // 체크박스가 아무것도 선택되어있지 않을 경우의 예외처리
					/*
						isset() 함수는 변수가 설정되어 있고, 값이 null이 아니라면 true를 반환하며, 그렇지 않으면 false를 반환

						만약 isset($_POST['hobby'])를 사용하지 않고 오직 !empty($_POST['hobby'])만 사용한다면, $_POST['hobby'] 변수가 설정되어 있지 않을 때 오류를 발생시킬 수 있음. 따라서 isset()를 사용하여 먼저 변수의 존재 여부를 확인하고, 그 다음에 empty()를 사용하여 값이 비어있는지를 확인하는 것은 보다 안전한 방법.

						재밋다! 예외처리!
					*/
					$num = count($_POST['hobby']);
					for($i = 0; $i < $num; $i++){
						echo $_POST['hobby'][$i];
						if($i != $num - 1)
							echo ", ";
					}
				}else{
					echo "없음";
				}
			?>
		</li>
	</ul>
</body>
</html>