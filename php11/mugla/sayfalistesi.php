<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sayfalar</title>

<?php include("bootstrap.php");?>
</head>
<body>
<?php include("loginkontrol.php");?>
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
    <a href="" data-toggle="modal" data-target="#silme_uyarisi">
    <span class="glyphicon glyphicon-trash"></span>
    </a>
    <!-- Silme Uyarısı vermek için bootstrap ekliyoruz -->
    <div id="silme_uyarisi" class="modal fade" role="dialog"> 
    <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
        <h4 class="modal-title">Silme Uyarısı</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body"><b><?php echo $kayit["sayfa_basligi"];?></b> başlıklı sayfayı silmek istediğinize emin misiniz?</div>
        <div class="modal-footer">
        <form action="sayfasil.php" method="post">
        <input type="hidden" name="sayfa_no" id="sayfa_no" value="<?php echo $kayit["sayfa_no"];?>">
        <button type="submit" class="btn btn-danger" id="delete" name="delete">Sayfayı Sil</button>
        <button type="button" class="btn btn-info" id="cancel" name="cancel" data-dismiss="modal">Vazgeç</button>
        </form>
        </div>
    </div>
    </div>
    </div>
    <!-- -->
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