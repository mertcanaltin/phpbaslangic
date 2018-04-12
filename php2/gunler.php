<!DOCTYPE html>
<html>
	<head>
		<title>For Döngüsü Örnek 1</title>
		<meta charset='UTF-8'/>
		<link href='css/stil.css' type='text/css' rel='stylesheet'/>
	</head>
	<body>
		<table cellpadding='2' cellspacing='0' border='1'>
		<?php
		$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
		for($i=0;$i<count($gunler);$i++){
			if($i%2==0)
			echo("<tr><td class='beyaz'>\n");
			else
			echo("<tr><td class='renkli'>\n");
			
			echo("$gunler[$i]");
			echo("</td></tr>\n");
		}
		?>
		</table>
	</body>
</html>