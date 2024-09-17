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
<div class="col-sm-12 col-md-12">
	<div class="form-group animated bounceInLeft">
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
														<span class="fas fa-key btn input-group-text" id="basic-addon1"></span>
													</div>
													<input type="password" class="form-control" placeholder="Şifrenizi Giriniz" aria-label="Kullanıcı Şifreniz" aria-describedby="basic-addon1" name="sifre">
<div class="show-password">
								<span class="fas fa-eye btn arkaplan-mavi5 yazirenk-beyaz input-group-text" id="basic-addon1"></span>
							</div>												
</div>

											</div>
</div>


<div class="col-sm-4 col-md-4 animated bounceInUp">
<input type="hidden" class="form-control" name="loginol">
<button type="submit" class="btn btn-success g-y100">Giriş Yap</button>
													
</div>
<div class="col-sm-4 col-md-4">

								
						
</div>
<div class="col-sm-4 col-md-4 animated bounceInUp">
<button type="submit" class="btn btn-danger g-y100" onclick="window.location.href='SifremiUnuttum.php'">Şifremi Unuttum</button>												
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

	