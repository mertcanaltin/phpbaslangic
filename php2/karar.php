<!DOCTYPE html>
<html>
	<head>
		<title>Karar Yapıları</title>
		<meta charset='UTF-8'/>
	</head>
	<body>
		<table border='1' cellspacing='0' cellpadding='3'>
			<tr>
				<td>İşlem Sonucu:</td>
				<td>
				<?php
				$a=128;
				echo($a++."<br/>");//a değişkenin değeri bir artar ve 129 olur
				$kalan=$a%2;
				if($kalan==0){
				echo("$a sayısının 2'ye bölününden kalan 0'dır.");
				}
				else{
				echo("$a sayısının 2'ye bölününden kalan 1'dir.");
				}
				
				?>
				</td>
			</tr>
		</table>
	</body>
</html>