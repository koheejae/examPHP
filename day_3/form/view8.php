<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		$file_dir = "C:/xampp/htdocs/study/day_3/form/data/"; 	//업로드된 이미지 파일을 저장할 경로가 $file_dir에 설정.
		$file_path = $file_dir.$_FILES['upload']["name"];		//$_FILES[“upload”][“name”]은 업로드된 파일명임. $file_path에는 저장할 폴더와 파일명을 포함한 경로가 저장.
		if(move_uploaded_file($_FILES['upload']["tmp_name"], $file_path)){ //업로드된 파일을 설정한 파일 경로에 저장함. $_FILES[“upload”][“tmp_ name”]은 서버에 임시로 저장된, 업로드된 파일명이고 $file_path는 ①에서 설정한 업로드된 파일을 저장할 경로를 의미.
			$img_path = "data/".$_FILES['upload']['name'];		//$img_path는 ⑤에서 <img> 태그의 src 속성으로 설정한 폴더와 이미지 파일명을 포함한 경로를 의미.
	?>
	<ul>
		<li><img src="<?= $img_path?>" width="200px"></li> <!-- 업로드된 이미지를 <img> 태그를 이용하여 화면에 보여줌. -->
		<li><?= $_POST['comment']?></li>
	</ul>
	<?php
		} else {
			echo "파일 업로드 오류가 발생했습니다!!!";
		}
	?>
</body>
</html>