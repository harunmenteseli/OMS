<?php
require("Ayarlar/Baglantim.php"); 
 ?>

<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
  

<body data-background-color="<?= $tema['arkaplan']?>">
<div class="wrapper y-y100 g-y100">
<div class="row y-y100 g-y100">
<div class="col-sm-3 col-md-3">

</div>
<div class="col-sm-6 col-md-6">
			<div class="content d-yatay-ortala d-dikey-ortala">
				<div class="page-inner">
				
			<div class="card">
<div class="card-header animated bounceIn">
  <img src="Resimler/logo.png" class="y300 g-y100">

								</div>
<div class="card-body">
<form id="Giris" action="javascript:void(0);">
<div class="row">
<div class="col-sm-12 col-md-12 animated bounceInLeft">
	<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="fas fa-user btn input-group-text" id="basic-addon1"></span>
													</div>
													<input type="text" class="form-control" placeholder="Kullanıcı Adınızı Giriniz" aria-label="Kullanıcı Adınız" aria-describedby="basic-addon1" name="kullaniciadi">
												</div>
											</div>
</div>
<div class="col-sm-12 col-md-12 animated bounceInRight">
<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="fas fa-at btn input-group-text" id="basic-addon1"></span>
													</div>
													<input type="mail" class="form-control" placeholder="Mail Adresinizi Giriniz" aria-label="Mail Adresinizi Giriniz" aria-describedby="basic-addon1" name="mail">
												
</div>

											</div>
</div>
<div class="col-sm-12 col-md-12 animated bounceInLeft">
	<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="fas fa-question btn input-group-text" id="basic-addon1"></span>
													</div>
													<input type="text" class="form-control" placeholder="Gizli Sorunuzu Giriniz" aria-label="Gizli Sorunuzu Giriniz" aria-describedby="basic-addon1" name="gizlisoru">
												</div>
											</div>
</div>
<div class="col-sm-12 col-md-12 animated bounceInRight">
	<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="fas fa-check btn input-group-text" id="basic-addon1"></span>
													</div>
													<input type="text" class="form-control" placeholder="Gizli Cevabınızı Giriniz" aria-label="Gizli Cevabınızı Giriniz" aria-describedby="basic-addon1" name="gizlicevap">
												</div>
											</div>
</div>
<div class="col-sm-12 col-md-12 animated bounceInUp">
<input type="hidden" class="form-control" name="unuttum">
<button type="submit" class="btn btn-success g-y100">Giriş Yap</button>												
</div>


</div>



</div>
</div>
</div>
  </form>
</div>

</div>
<div class="col-sm-3 col-md-3">

</div>
</div>







</div>
		<div type="hidden" id="sonuc">

        </div>
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
?>
	
    
</body>
</html>

	