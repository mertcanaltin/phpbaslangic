<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Slayt Listesi</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
<table class="table table-hover table-responsive-xl">
  <tr>
    <th scope="col">Slayt No</th>
    <th scope="col">Resim</th>
    <th scope="col">Başlık</th>
    <th scope="col">Açıklama</th>
    <th scope="col">Ekleme Tarihi</th>
    <th scope="col">Değiştirme Tarihi</th>
  </tr>
  <?php
  try{
	  include("vtbaglanti.php");
	  $sorgu="Select * From slayt_tablosu";
	  $kayitlar=$baglanti->query($sorgu);
	  foreach($kayitlar as $kayit){
  		echo("<tr>");
    		echo("<td>".$kayit['resim_id']."</td>");
    		echo("<td><a href='".$kayit['resim']."'>".$kayit['resim']."</a></td>");
    		echo("<td>".$kayit['baslik']."</td>");
    		echo("<td>".$kayit['aciklama']."</td>");
    		echo("<td>".$kayit['ekleme_tarihi']."</td>");
    		echo("<td>".$kayit['degistirme_tarihi']."</td>");
  		echo("</tr>");
	  }
  }catch(PDOException $e){
  }
  ?>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>