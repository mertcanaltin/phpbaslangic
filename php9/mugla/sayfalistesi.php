<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sayfalar</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<!-- En son derlenmiş ve minimize edilmiş CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Opsiyonel tema -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<table class="table table-hover table-striped">
  <tr>
    <th scope="col">Sayfa<br>
    No</th>
    <th scope="col">Sayfa Başlığı</th>
    <th scope="col">Sayfa İçeriği</th>
    <th scope="col">Oluşturma<br>
    Tarihi</th>
    <th scope="col">Düzenleme<br>
      Tarihi</th>
    <th scope="col">Sayfa Linki</th>
    <th scope="col">Dil</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>

<?php 
try{
	include("vtbaglan.php");
	$sorgu="Select * From sayfalar_tablosu";
	$sonuc=$baglanti->query($sorgu);
	foreach($sonuc as $kayit)
	{
?>
  <tr>
    <td><?php echo $kayit["sayfa_no"];?></td>
    <td><?php echo $kayit["sayfa_basligi"];?></td>
    <td><?php echo substr(strip_tags($kayit["sayfa_icerik"]),0,100);?></td>
    <td><?php echo $kayit["olusturma_tarihi"];?>;</td>
    <td><?php echo $kayit["duzenleme_tarihi"];?></td>
    <td><?php echo $kayit["sayfa_link"];?></td>
    <td><?php echo $kayit["dil"];?></td>
    <td>
    <a href="sayfaduzenle.php?sno=<?php echo $kayit["sayfa_no"]?>">
    <span class="glyphicon glyphicon-pencil"></span>
    </a>
    </td>
    <td>
    <a href="sayfasil.php?sno=<?php echo $kayit["sayfa_no"]?>">
    <span class="glyphicon glyphicon-trash"></span>
    </a>
    </td>
  </tr>
<?php
	}//foreach döngüsünün bittiği yer
}catch(PDOException $ex){
}
?>
</table>
<form name="form1" method="post" action="sayfaekle.php">
  <input name="sayfaekle" type="submit" class="btn btn-success" id="sayfaekle" value="Sayfa Ekle">
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>