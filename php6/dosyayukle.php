<!DOCTYPE html>
<html>
	<head>
		<title>Dosya Yükleme</title>
		<meta charset='utf-8'/>
	</head>
	<body>
	<?php
	if(isset($_POST['yukle'])){
		if($_FILES['dosya']['tmp_name']){
			if(($_FILES['dosya']['size'])<=(120*1024)){
				copy($_FILES['dosya']['tmp_name'],"dosyalar//".$_FILES['dosya']['name']);
				echo($_FILES['dosya']['name']." dosyası başarı ile yüklendi");
			}
			else{
			echo("Dosya boyutu 2 MB'tan büyük.");
			}
		}
		else{
			echo("Dosya Yükleme Hatası.");
		}
	}
	else{
	header("location:dosyasec.php");
	}
	?>
	</body>
</html>