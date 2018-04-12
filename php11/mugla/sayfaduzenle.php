<!doctype html>
<div>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Yeni sayfa ekle</title>
 <?php include("bootstrap.php");?>
  <script src="JS/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({iconsPath : './resimler/nicEditorIcons.gif',fullPanel : true, maxHeight : 200}).panelInstance('sayfa_icerik');
});
</script>
  </head>
    
  <body>
  <div class="jumbotron"><div class="container-fluid"><h2>Yeni Sayfa Ekle</h2></div></div>
  <div>
  <?php 
  if(!isset($_POST["kaydet"])){ 
  
	  $sno=isset($_GET["sno"])?$_GET["sno"]:0;
	  include("vtbaglan.php");
	  $sorgu="SELECT * FROM sayfalar_tablosu WHERE sayfa_no=:sn";
	  $sonuc=$baglanti->prepare($sorgu);
	  $sonuc->bindParam(":sn",$sno,PDO::PARAM_INT);
	  $sonuc->execute();
	  if($sonuc->rowCount()>0){
		  foreach($sonuc as $satir){
  ?>
  <form action="sayfaduzenle.php" method="post">
    <table class="table">
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
        <td><input name="sayfa_no" type="hidden" id="sayfa_no" value="<?php echo $satir["sayfa_no"]; ?>"></td>
      </tr>
      <tr>
        <th scope="row">Sayfa Başlığı</th>
        <td>:</td>
        <td><input name="sayfa_basligi" type="text" id="sayfa_basligi" size="120" maxlength="200" value="<?php echo $satir["sayfa_basligi"]; ?>"></td>
      </tr>
      <tr>
        <th scope="row">Sayfa İçeriği</th>
        <td>:</td>
        <td><textarea name="sayfa_icerik" cols="100" rows="20" id="sayfa_icerik"><?php echo $satir["sayfa_icerik"]; ?></textarea></td>
      </tr>
      <tr>
        <th scope="row">Oluşturma Tarihi</th>
        <td>:</td>
        <td><label><?php echo $satir["olusturma_tarihi"]; ?></label>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Güncelleme Tarihi</th>
        <td>:</td>
        <td><label><?php echo date("d/m/Y");?></label></td>
      </tr>
      <tr>
        <th scope="row">Sayfa Linki</th>
        <td>:</td>
        <td><input name="sayfa_link" type="text" id="sayfa_link" size="120" maxlength="210" value="<?php echo $satir["sayfa_link"]; ?>"></td>
      </tr>
      <tr>
        <th scope="row">Dil</th>
        <td>:</td>
        <td><select name="dil" id="dil">
        <?php 
		$TR="";
		$EN="";
		if($satir["dil"]=="TR")
		$TR="selected=\"selected\"";
		else
		$EN="selected=\"selected\"";
		?>
          <option value="TR" <?php echo $TR;?>>Türkçe</option>
          <option value="EN" <?php echo $EN;?>>İngilizce</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
        <td><button class="btn btn-success btn-lg btn-block" id="kaydet" name="kaydet" type="submit" value="kaydet">Güncelle</button><button class="btn btn-danger btn-lg btn-block" id="sil" type="reset">Temizle</button></td>
      </tr>
    </table>
    </form>
    <?php 
		  }//foreach döngüsünün bitti yer
		  }//if($sonuc... ifadesinin bittiği yer
		  else
		  {
			  echo("<div class='alert alert-danger'>Güncelleme yapılacak sayfa bilgisine ulaşılamadı. Sayfa Listesine yönlendiriliyorsunuz.</div>");	
		header("refresh:5;url=sayfalistesi.php");
			  
		  }
	}//If kodunun bittiği yer
	else{
	try
		{
	include("vtbaglan.php");
	$sorgu="UPDATE sayfalar_tablosu SET 
	sayfa_basligi=:s_b, 
	sayfa_link=:s_l, 
	sayfa_icerik=:s_i, 
	duzenleme_tarihi=:d_t,
	dil=:dil  
	WHERE sayfa_no=:s_n";
	$sonuc=$baglanti->prepare($sorgu);
	$sonuc->bindParam(":s_b",$_POST["sayfa_basligi"],PDO::PARAM_STR);
	$sonuc->bindParam(":s_l",$_POST["sayfa_link"],PDO::PARAM_STR);
	$sonuc->bindParam(":s_i",$_POST["sayfa_icerik"],PDO::PARAM_STR);
	$tarih=date("Y-m-d H:i:s");
	$sonuc->bindParam(":s_n",$_POST["sayfa_no"],PDO::PARAM_INT);
	$sonuc->bindParam(":d_t",$tarih,PDO::PARAM_STR);
	$sonuc->bindParam(":dil",$_POST["dil"],PDO::PARAM_STR);
	
	$sonuc->execute();
	echo("<div class='alert alert-success'>Kayıt güncelleme başarılı olarak gerçekleşti. Sayfa Listesine yönlendiriliyorsunuz.</div>");
	header("refresh:5;url=sayfalistesi.php");
		}catch(PDOException $ex){//try bitti
		echo("<div class='alert alert-danger'>Kayıt güncellemede Hata. Sayfa Listesine yönlendiriliyorsunuz.</div>");	
		header("refresh:5;url=sayfalistesi.php");	
		}
	}
	
	?>
  </div>
  </body>
  </html>
</div>
