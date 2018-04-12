<!DOCTYPE html>
<html>
	<head>
		<title>Dosya Yükleme</title>
		<meta charset='utf-8'/>
	</head>
	<body>
	<?php
	if(isset($_POST['yukle'])){
		$tur=array(	'image/jpeg',
					'image/jpg',
					'image/png',
					'image/x-png',
					'image/gif');
		if(in_array(strtolower($_FILES['dosya']['type']),$tur)){
			move_uploaded_file($_FILES['dosya']['tmp_name'],"resimler//".$_FILES['dosya']['name']);
			echo("dosya yüklendi.<br />");
			echo("<img src=\"resimler/{$_FILES['dosya']['name']}\"/>");
		}
		else{
			echo($_FILES['dosya']['type']." türündeki dosyaları yükleme yetkiniz yok.");
		}
	}
	else{
	header("location:dosyasec.php");
	}
	?>
	</body>
</html>