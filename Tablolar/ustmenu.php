<?php
require_once("DovizKurlari.Class.php");
$DovizKurlari = new DovizKurlari();
?>
<!-- Logo Header -->
			<div class="logo-header" data-background-color="<?= $tema['logoarka']?>">
				
				<a href="index.php" class="logo">
				<span class="<?= $tema['logoyazi']?> <?= $tema['logorenk']?> <?= $tema['logoboyut']?>"><?= $ayar['siteadi']?></span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="<?= $tema['ustmenuarka']?>">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

<li class="nav-item dropdown hidden-caret">
	<div class="nav-link btn-success" aria-expanded="false">
								<i class="fas fa-dollar-sign"></i> Dolar <?= $DovizKurlari->dolar_satis; ?>
							</div>
								</li>

<li class="nav-item dropdown hidden-caret">
	<div class="nav-link btn-primary" aria-expanded="false">
								<i class="fas fa-euro-sign"></i> Avro <?=  $DovizKurlari->euro_satis; ?>
							</div>
								</li>

<li class="nav-item dropdown hidden-caret">
	<div class="nav-link btn-secondary" aria-expanded="false">
								<i class="fas fa-pound-sign"></i> Sterlin <?= $DovizKurlari->pound_satis; ?>
							</div>
								</li>
<li class="nav-item dropdown hidden-caret">
	<div class="nav-link btn-warning" aria-expanded="false">
								<i class="fas fa-ruble-sign"></i> Ruble <?= $DovizKurlari->ruble_satis; ?>
							</div>
								</li>

<li class="nav-item dropdown hidden-caret">

								</li>

</ul>
</div>
				
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-dollar-sign"></i>
							</a>
						</li>
	
<?php
 $mesajuyarisayisi=null;
$var=null;
 $mesajuyari = $baglanti->query("SELECT * FROM Mesajlar")->fetchAll(PDO::FETCH_ASSOC);
if(count($mesajuyari)>0){
?>
<?php
foreach($mesajuyari as $mesajuyarim){
?>
<?php	

if($mesajuyarim["kime"] == $kbilgi["id"] && $mesajuyarim["alanpasif"] == 0 && $mesajuyarim["okunma"] == 0){
$var = true;
$mesajuyarisayisi++;
} else{
$var = false;   
$mesajuyarisayisi= 0;
}?>
<?php }?> 
	
		<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
<span class="notification"><?= $mesajuyarisayisi; ?></span>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
						<div class="dropdown-title"><span class="text-success"><?= $mesajuyarisayisi; ?></span> Okunmamış Mesajınız Var!</div>	
								</li>

<?php foreach($mesajuyari as $mesajuyarim1){?>
<?php if($mesajuyarim1["kime"] == $kbilgi["id"] && $mesajuyarim1["alanpasif"] == 0 && $mesajuyarim1["okunma"] == 0){?>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="Mesajlar.php">
<div class="notif-icon notif-success">
<?php 
                                                      $gelen = $baglanti->query("SELECT * FROM Kullanicilar where id=".$mesajuyarim["kimden"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($gelen)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($gelen as $gelenim){
                                                            ?>
                                                    <?php $kisaad = substr($gelenim["ad"],0,1);
$kisasoyad = substr($gelenim["soyad"],0,1); ?>
<?= $kisaad; ?> <?= $kisasoyad; ?>
                                                    <?php } ?>
       <?php } ?>
</div>
												<div class="notif-content">
													<span class="subject text-primary"><?php 
                                                      $gelen = $baglanti->query("SELECT * FROM Kullanicilar where id=".$mesajuyarim["kimden"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($gelen)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($gelen as $gelenim){
                                                            ?>
                                                    
                                                     <?= $gelenim['ad'] ?> <?= $gelenim['soyad'] ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></span>
													<span class="block">
														<?= $mesajuyarim1['baslik'] ?>
													</span>
													<span class="time text-danger"><?= $mesajuyarim1['mesajtarihi'] ?></span> 
												</div>
											</a>
											
										</div>
									</div>
								</li>

	<?php } ?>
<?php } ?>
								<li>
									<a class="see-all" href="Mesajlar.php">Tüm Mesajları Gör<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
												
   
  <?php }?> 
<?php 
 $cariuyarisayisi=null;
$var=null;
$cariuyari = $baglanti->query("SELECT * FROM Cariler")->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cariuyari)>0){


                                                ?>
                                                
                                                
                                           
                                       
		             <?php

                                                        foreach($cariuyari as $cariuyarim){
                                                            ?>
                                                    
                        
                             
<?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi=".$cariuyarim["id"]);
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan=".$cariuyarim["id"]);
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>
<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan=".$cariuyarim["id"]);
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan=".$cariuyarim["id"]);
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>
<?php
$carisatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan=".$cariuyarim["id"]);
$carisatistopla->execute();
$carisatisyaz= $carisatistopla->fetch();
$carisatistoplam=$carisatisyaz['satis'];
?>

<?php
$fatsatis  = $fatsatistoplam;
$ceksatis  = $ceksatistoplam;
$bankasatis  = $bankasatistoplam;
$kasasatis  = $kasasatistoplam;
$carisatis  = $carisatistoplam;
$cikistoplam  = $fatsatis + $ceksatis + $bankasatis + $kasasatis + $carisatis;
?>

<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi=".$cariuyarim["id"]);
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan=".$cariuyarim["id"]);
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan=".$cariuyarim["id"]);
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan=".$cariuyarim["id"]);
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>
<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan=".$cariuyarim["id"]);
$carialistopla->execute();
$carialisyaz= $carialistopla->fetch();
$carialistoplam=$carialisyaz['alis'];
?>

<?php 
$fatalis  = $fatalistoplam;
$cekalis  = $cekalistoplam;
$bankaalis  = $bankaalistoplam;
$kasaalis  = $kasaalistoplam;
$carialis  = $carialistoplam;
$giristoplam  = $fatalis + $cekalis + $bankaalis + $kasaalis + $carialis;
?>

<?php
$cikis  = $cikistoplam;
$giris  = $giristoplam;
$carikalan  = $cikis - $giris;
?>
	<?php	

if ($cariuyarim["risklimiti"]< $carikalan) {

$var = true;
$cariuyarisayisi++;
} else{
$var = false;   

  }?>			  
	
	
	
 	       		<?php }?>
	<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-users"></i>
								<span class="notification card-danger"><?= $cariuyarisayisi; ?></span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Uyarı Limitini Aşan <span class="text-danger"><?= $cariuyarisayisi; ?></span> Cari Var!</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
<?php
    
                                                        foreach($cariuyari as $cariuyarim1){
                                                            ?>
<?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi=".$cariuyarim1["id"]);
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan=".$cariuyarim1["id"]);
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>
<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan=".$cariuyarim1["id"]);
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan=".$cariuyarim1["id"]);
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>
<?php
$carisatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan=".$cariuyarim1["id"]);
$carisatistopla->execute();
$carisatisyaz= $carisatistopla->fetch();
$carisatistoplam=$carisatisyaz['satis'];
?>

<?php
$fatsatis  = $fatsatistoplam;
$ceksatis  = $ceksatistoplam;
$bankasatis  = $bankasatistoplam;
$kasasatis  = $kasasatistoplam;
$carisatis  = $carisatistoplam;
$cikistoplam  = $fatsatis + $ceksatis + $bankasatis + $kasasatis + $carisatis;
?>

<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi=".$cariuyarim1["id"]);
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan=".$cariuyarim1["id"]);
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan=".$cariuyarim1["id"]);
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan=".$cariuyarim1["id"]);
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>
<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan=".$cariuyarim1["id"]);
$carialistopla->execute();
$carialisyaz= $carialistopla->fetch();
$carialistoplam=$carialisyaz['alis'];
?>

<?php 
$fatalis  = $fatalistoplam;
$cekalis  = $cekalistoplam;
$bankaalis  = $bankaalistoplam;
$kasaalis  = $kasaalistoplam;
$carialis  = $carialistoplam;
$giristoplam  = $fatalis + $cekalis + $bankaalis + $kasaalis + $carialis;
?>

<?php
$cikis  = $cikistoplam;
$giris  = $giristoplam;
$carikalan  = $cikis - $giris;
$asim  = $carikalan - $cariuyarim1["risklimiti"];
?>

<?php
 if ($cariuyarim1["risklimiti"]< $carikalan) {?>

<a href="CariHesapDetay.php?id=<?= $cariuyarim1["id"] ?>">
	
												<div class="notif-icon notif-warning">

<?php
  $kisaunvan = substr($cariuyarim1["unvani"],0,1);
?>
<?= $kisaunvan; ?>
</div>
												<div class="notif-content">
<span class="subject text-primary"> <?=$cariuyarim1["unvani"];?> 
	
</span>
		<span class="block">
<span class="text-success"><?= number_format($cariuyarim1["risklimiti"], 2, ',', '.');?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$cariuyarim1["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($parabirimi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($parabirimi as $parabirimim){
                                                            ?>
                                                    
                                                     <?php echo $parabirimim['kisaltma']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></span> Risk Limitinden 
<span class="text-danger"><?= number_format($asim, 2, ',', '.');?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$cariuyarim1["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($parabirimi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($parabirimi as $parabirimim){
                                                            ?>
                                                    
                                                     <?php echo $parabirimim['kisaltma']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></span> Aşım Yapıldı.

													</span>
												</div>
											</a>
<?php } ?>

    <?php }?>    


										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="Cariler.php">Carilere Git<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>

						</li>
<?php }?> 

<?php 
$stokuyarisayisi=null;
$var=null;
$stokuyari = $baglanti->query("SELECT * FROM Urunler")->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($stokuyari)>0){


                                                ?>
                                                
                                                
                                           
                                       
		             <?php
     foreach($stokuyari as $stokuyarim){
 ?>
                                                    
                        
                             
<?php
$alistopla=$baglanti->prepare("SELECT SUM(adet) AS alis FROM AlisFaturasi where urunadi=".$stokuyarim["id"]);
$alistopla->execute();
$alisyaz= $alistopla->fetch();
$alistoplam=$alisyaz['alis'];
?>
<?php
$satistopla=$baglanti->prepare("SELECT SUM(adet) AS satis FROM SatisFaturasi where urunadi=".$stokuyarim["id"]);
$satistopla->execute();
$satisyaz= $satistopla->fetch();
$satistoplam=$satisyaz['satis'];
?>
<?php
$stokalis  = $alistoplam;
$stoksatis  = $satistoplam;
$stokkalan  = $stokalis - $stoksatis;
?>

	<?php	

if($stokkalan < $stokuyarim["uyarilimiti"]){
$var = true;
$stokuyarisayisi++;
} else{
$var = false;   
$stokuyarisayisi= 0;
}?>			  
	
	
	
 	       		<?php }?>
	<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-boxes"></i>
								<span class="notification card-warning"><?= $stokuyarisayisi; ?></span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Uyarı Limitinden Azalan 
<span class="text-warning"><?= $stokuyarisayisi; ?></span> Ürün Var!</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
<?php
    
                                                        foreach($stokuyari as $stokuyarim1){
                                                            ?>
<?php
$alistopla=$baglanti->prepare("SELECT SUM(adet) AS alis FROM AlisFaturasi where urunadi=".$stokuyarim1["id"]);
$alistopla->execute();
$alisyaz= $alistopla->fetch();
$alistoplam=$alisyaz['alis'];
?>
<?php
$satistopla=$baglanti->prepare("SELECT SUM(adet) AS satis FROM SatisFaturasi where urunadi=".$stokuyarim1["id"]);
$satistopla->execute();
$satisyaz= $satistopla->fetch();
$satistoplam=$satisyaz['satis'];
?>
<?php
$stokalis  = $alistoplam;
$stoksatis  = $satistoplam;
$stokkalan  = $stokalis - $stoksatis;
?>

<?php	
	  
	if($stokkalan < $stokuyarim1["uyarilimiti"]){?>

<a>
											<div class="notif-icon notif-warning"><?php
  $kisaurun = substr($stokuyarim1["urunadi"],0,1);
?>
<?= $kisaurun; ?></div>
												<div class="notif-content">
<span class="subject text-primary"><?=$stokuyarim1["urunadi"];?> - <?php 
                                                      $marka = $baglanti->query("SELECT * FROM Markalar where id=".$stokuyarim1["markasi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($marka)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($marka as $markasi){
                                                            ?>
  <?php
  $kisamarka = substr( $markasi['markaadi'],0,15);
 
?>
<?= $kisamarka; ?>...
                                                
                                                    <?php }  ?>
                                       
       <?php } ?></span>
													<span class="block text-danger">
													<?= $stokkalan;?> <?php 
                                                      $birim = $baglanti->query("SELECT * FROM Birim where id=".$stokuyarim1["birimadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($birim)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($birim as $birimim){
                                                            ?>
             
                                                     <?php echo $birimim['kisaltma']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
													</span>
													<span class="time">Stok Kaldı.</span> 
												</div>
											</a>

<?php } ?>
	

    <?php }?>    


										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="Urunler.php">Ürünlere Git<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>

						</li>
<?php }?> 
	<?php 
$cekuyarisayisi=null;
$var=null;
$cekuyari = $baglanti->query("SELECT * FROM CekSenet")->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cekuyari)>0){


                                                ?>

  <?php
    
                                                        foreach($cekuyari as $cekuyarim){
                                                            ?>


	
<?php	

$ilktarih=date('Y-m-d'); //bu ilk kayıt tarihi olsun
$sontarih=$kisatarih = substr($cekuyarim["vadetarihi"],0,10);//buda şu anki tarih olsun
$ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom
$sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom
$fark=($sontarihstr-$ilktarihstr)/86400;//sondan ilki çıkarıp 86400 e bölüyoz bu bize günü verecek
if($fark < 8 && $fark > -8){
$var = true;
$cekuyarisayisi++;
} else{
$var = false;   
$cekuyarisayisi= 0;
}?>	

<?php }?> 



	<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-money-check"></i>
								<span class="notification card-secondary"><?= $cekuyarisayisi; ?></span>
</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Vadesi Yaklaşan 
<span class="text-secondary"><?= $cekuyarisayisi; ?></span> Adet Çek - Senet Var!</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">


                                                
                                                
                                           
                                       
		             <?php
    
                                                        foreach($cekuyari as $cekuyarim1){
                                                            ?>

<?php	
$ilktarih=date('Y-m-d'); //bu ilk kayıt tarihi olsun
$sontarih=$kisatarih = substr($cekuyarim1["vadetarihi"],0,10);//buda şu anki tarih olsun
$ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom
$sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom
$farkim=($sontarihstr-$ilktarihstr)/86400;//sondan ilki çıkarıp 86400 e bölüyoz bu bize günü verecek
	  
	if($farkim < 8 && $farkim > -8){?>
<a>
	<?php $cari = $baglanti->query("SELECT * FROM Cariler where id=".$cekuyarim1["unvan"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cari)>0){


                                                ?>
 <?php
    
                                                        foreach($cari as $carisi){
                                                            ?>
												<div class="notif-icon notif-secondary">
<?php
  $kisaisim = substr($carisi["unvani"],0,1);
?>
<?= $kisaisim; ?>
</div>
												<div class="notif-content">
<span class="subject text-primary">
                                                
                                                
                                           
                                                   
                                                    
                                                     <?php echo $carisi['unvani']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
      </span> <?php } ?>
													
												
	<?php
$ilktarih=date('Y-m-d'); //bu ilk kayıt tarihi olsun
$sontarih=$kisatarih = substr($cekuyarim1["vadetarihi"],0,10);//buda şu anki tarih olsun
$ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom
$sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom
$fark=($sontarihstr-$ilktarihstr)/86400;
?>

<?php if ($fark < 0 && $fark > -8) {?>
<span class="block text-danger">
Ödeme Tarihini : <?= $fark; ?> Gün Geçti
</span>
 <?php }?>
<?php if ($fark == 0) {?>
<span class="block text-danger">
Ödeme Tarihi Bugün
</span>
 <?php }?>  

<?php if ($fark > 0 && $fark < 8) {?>
 <span class="block text-warning">
Ödeme Tarihine : <?= $fark; ?> Gün Kaldı
</span>
 <?php }?>
													
													<span class="time"><?php

if ($cekuyarim1['islem'] == "alinan") {
  echo "Alınan";
}
elseif ($cekuyarim1['islem'] == "verilen") {
  echo "Verilen";
}
?> <?php

if ($cekuyarim1['ceksenet'] == "cek") {
  echo "Çek";
}
elseif ($cekuyarim1['ceksenet'] == "senet") {
  echo "Senet";
}
?></span> 
												</div>
											</a>
 <?php }?> 
 <?php }?> 





										</div>
									</div>
								</li>

								<li>
									<a class="see-all"> </a>
								</li>
							</ul>

						</li>
 <?php }?> 
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-<?= $tema['tablorenk']?> animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">HIZLI MENÜ</span>
									<span class="subtitle op-8">Kısayollar</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer bg-<?= $tema['arkaplan']?>">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="CariEkle.php">
												<div class="quick-actions-item">
													<i class="fas fa-user-plus text-danger"></i>
													<span class="text text-danger">Cari Ekle</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="AlisFaturasiEkle.php">
												<div class="quick-actions-item">
													<i class="fas fa-file-import text-warning"></i>
													<span class="text text-warning">Alış Yap</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="SatisFaturasiEkle.php">
												<div class="quick-actions-item">
													<i class="fas fa-file-export text-primary"></i>
													<span class="text text-primary">Satış Yap</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="Kasalar.php">
												<div class="quick-actions-item">
													<i class="fas fa-coins text-success"></i>
													<span class="text text-success">Kasalar</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="Bankalar.php">
												<div class="quick-actions-item">
													<i class="fas fa-building text-secondary"></i>
													<span class="text text-secondary">Bankalar</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="Depolar.php">
												<div class="quick-actions-item">
													<i class="fas fa-dolly-flatbed text-info"></i>
													<span class="text text-info">Depolar</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
							<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm card-info rounded-circle">
								<div class="notif-content text-center i-b-ust10">
<?php $kad = substr($kbilgi["ad"],0,1);
$ksoyad = substr($kbilgi["soyad"],0,1);?>
<?= $kad; ?> <?= $ksoyad; ?> 
								</div>
</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
<div class="avatar-lg rounded-circle card-info text-center i-b-ust15"><?php $kad = substr($kbilgi["ad"],0,1);
$ksoyad = substr($kbilgi["soyad"],0,1);?>
<?= $kad; ?> <?= $ksoyad; ?> </div>
											<div class="u-text">
												<h4><?= $kbilgi['ad']?> <?= $kbilgi['soyad']?></h4>
<?php 
 if ($kbilgi["yetki"]==1) {?>
<p class="text-muted text-info">Muhasebe</p><a href="Profilim.php" class="btn btn-xs btn-info btn-sm">Profilimi Görüntüle</a>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==2) {?>
<p class="text-muted text-primary">Muhasebe Müdürü</p><a href="Profilim.php" class="btn btn-xs btn-info btn-sm">Profilimi Görüntüle</a>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==3) {?>
<p class="text-muted text-success">Genel Müdür</p><a href="Profilim.php" class="btn btn-xs btn-info btn-sm">Profilimi Görüntüle</a>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==4) {?>
<p class="text-muted text-danger">Patron</p><a href="Profilim.php" class="btn btn-xs btn-info btn-sm">Profilimi Görüntüle</a>
<?php }?>

											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="Profilim.php">Profilim</a>
										
										<a class="dropdown-item" href="Mesajlar.php">Mesajlarım</a>
										<a class="dropdown-item" href="Ajandam.php">Ajandam</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="ProfilimiDuzenle.php">Profilimi Düzenle</a>
										<div class="dropdown-divider"></div>
													<form id="Cikis" action="javascript:void(0);">
<input type="hidden" class="form-control" name="cikisyap">
<button type="submit" class="btn btn-danger btn-block btn-sm" >ÇIKIŞ YAP</button>
</form>	
	

									</li>
								</div>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
			<!-- End Navbar -->

