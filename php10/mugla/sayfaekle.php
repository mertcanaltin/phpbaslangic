<!doctype html>
<div>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Yeni sayfa ekle</title>
  <!-- En son derlenmiş ve minimize edilmiş CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Opsiyonel tema -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- En son derlenmiş ve minimize edilmiş JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <?php if(!isset($_POST["kaydet"])){ ?>
  <form action="sayfaekle.php" method="post">
    <table>
      <tr>
        <th scope="row">Sayfa Başlığı</th>
        <td>:</td>
        <td><input name="sayfa_basligi" type="text" id="sayfa_basligi" size="120" maxlength="200"></td>
      </tr>
      <tr>
        <th scope="row">Sayfa İçeriği</th>
        <td>:</td>
        <td><textarea name="sayfa_icerik" cols="100" rows="20" id="sayfa_icerik"></textarea></td>
      </tr>
      <tr>
        <th scope="row">Oluşturma Tarihi</th>
        <td>:</td>
        <td><label><?php echo date("d/m/Y");?></label>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Güncelleme Tarihi</th>
        <td>:</td>
        <td><label><?php echo date("d/m/Y");?></label></td>
      </tr>
      <tr>
        <th scope="row">Sayfa Linki</th>
        <td>:</td>
        <td><input name="sayfa_link" type="text" id="sayfa_link" size="120" maxlength="210"></td>
      </tr>
      <tr>
        <th scope="row">Dil</th>
        <td>:</td>
        <td><select name="dil" id="dil">
          <option value="TR" selected="selected">Türkçe</option>
          <option value="EN">İngilizce</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
        <td><button class="btn btn-success btn-lg btn-block" id="kaydet" name="kaydet" type="submit" value="kaydet">Kaydet</button><button class="btn btn-danger btn-lg btn-block" id="sil" type="reset">Temizle</button></td>
      </tr>
    </table>
    </form>
    <?php }//If kodunun bittiği yer
	else{
	try
		{
	include("vtbaglan.php");
	$sorgu="INSERT INTO sayfalar_tablosu (sayfa_basligi,sayfa_link,sayfa_icerik,olusturma_tarihi,duzenleme_tarihi,dil) VALUES (:s_b,:s_l,:s_i,:o_t,:d_t,:dil)";
	$sonuc=$baglanti->prepare($sorgu);
	$sonuc->bindParam(":s_b",$_POST["sayfa_basligi"],PDO::PARAM_STR);
	$sonuc->bindParam(":s_l",$_POST["sayfa_link"],PDO::PARAM_STR);
	$sonuc->bindParam(":s_i",$_POST["sayfa_icerik"],PDO::PARAM_STR);
	$tarih=date("Y-m-d H:i:s");
	$sonuc->bindParam(":o_t",$tarih,PDO::PARAM_STR);
	$sonuc->bindParam(":d_t",$tarih,PDO::PARAM_STR);
	$sonuc->bindParam(":dil",$_POST["dil"],PDO::PARAM_STR);
	
	$sonuc->execute();
	echo("<div class='alert alert-success'>Kayıt ekleme başarılı olarak gerçekleşti. Sayfa Listesine yönlendiriliyorsunuz.</div>");
	header("refresh:5;url=sayfalistesi.php");
		}catch(PDOException $ex){//try bitti
		echo("<div class='alert alert-danger'>Kayıt eklemede Hata. Sayfa Listesine yönlendiriliyorsunuz.</div>");	
		header("refresh:5;url=sayfalistesi.php");	
		}
	}
	
	?>
  </div>
  </body>
  </html>
</div>
