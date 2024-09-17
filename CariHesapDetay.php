<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	<?php


$cari = $baglanti->prepare("SELECT * FROM Cariler Where id=:id");
$cari->execute(['id' => (int)$_GET["id"]]);
$carim = $cari->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $carim['unvani']?> Cari Raporu - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
include("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
?>

		</div>
<?php
require("Tablolar/sol.php"); //sol menü
?>
		<div class="main-panel">
			<div id="yazdir" class="content">
				<div class="page-inner">
					<div class="row">
                                            <div class="col-md-12">
					<div class="card">
							
								<div class="card-body ">

<div class="row">
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="btn-label">
            <i class="fas fa-file-invoice"></i>
          </span> 
          <span class="text">AL - SAT</span>
  </button>
  <div class="dropdown-menu animated fadeIn">
<a class="dropdown-item" href="CariSatisEkle.php?id=<?= $carim["id"] ?>">SATIŞ YAP</a>
    <a class="dropdown-item" href="CariAlisEkle.php?id=<?= $carim["id"] ?>">ALIŞ YAP</a>

  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-book-reader"></i>
          </span> 
          <span class="text">CARİ İŞLEM</span>
  </button>
  <div class="dropdown-menu animated fadeIn">
    <a class="dropdown-item" href="CCariBorclandirEkle.php?id=<?= $carim["id"] ?>">CARİYİ BORÇLANDIR</a>
    <a class="dropdown-item" href="CCariAlacaklandirEkle.php?id=<?= $carim["id"] ?>">CARİYİ ALACAKLANDIR</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-coins"></i>
          </span> 
          <span class="text">KASA</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
     <a class="dropdown-item" href="CariKasaGiris.php?id=<?= $carim["id"] ?>">NAKİT ÖDEME AL</a>
    <a class="dropdown-item" href="CariKasaCikis.php?id=<?= $carim["id"] ?>">NAKİ ÖDEME YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="btn-label">
            <i class="fas fa-building"></i>
          </span> 
          <span class="text">BANKA</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
  <a class="dropdown-item" href="CariBankaGiris.php?id=<?= $carim["id"] ?>">BANKA ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariBankaCikis.php?id=<?= $carim["id"] ?>">BANKA ÖDEMESİ YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-money-check"></i>
          </span> 
          <span class="text">ÇEK</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
       <a class="dropdown-item" href="CariAlinanCekEkle.php?id=<?= $carim["id"] ?>">ÇEK ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariVerilenCekEkle.php?id=<?= $carim["id"] ?>">ÇEK ÖDEMESİ YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="btn-label">
            <i class="fas fa-money-check"></i>
          </span> 
          <span class="text">SENET</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
       <a class="dropdown-item" href="CariAlinanSenetEkle.php?id=<?= $carim["id"] ?>">SENET ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariVerilenSenetEkle.php?id=<?= $carim["id"] ?>">SENET ÖDEMESİ YAP</a>
  </div>
</div>
</div>
</div>

				
					</div>
			</div>
								<div class="card sabitmenu">
							
								<div class="card-body ">

<div class="row">
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="btn-label">
            <i class="fas fa-file-invoice"></i>
          </span> 
          <span class="text">AL - SAT</span>
  </button>
  <div class="dropdown-menu animated fadeIn">
<a class="dropdown-item" href="CariSatisEkle.php?id=<?= $carim["id"] ?>">SATIŞ YAP</a>
    <a class="dropdown-item" href="CariAlisEkle.php?id=<?= $carim["id"] ?>">ALIŞ YAP</a>

  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-book-reader"></i>
          </span> 
          <span class="text">CARİ İŞLEM</span>
  </button>
  <div class="dropdown-menu animated fadeIn">
    <a class="dropdown-item" href="CCariBorclandirEkle.php?id=<?= $carim["id"] ?>">CARİYİ BORÇLANDIR</a>
    <a class="dropdown-item" href="CCariAlacaklandirEkle.php?id=<?= $carim["id"] ?>">CARİYİ ALACAKLANDIR</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-coins"></i>
          </span> 
          <span class="text">KASA</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
     <a class="dropdown-item" href="CariKasaGiris.php?id=<?= $carim["id"] ?>">NAKİT ÖDEME AL</a>
    <a class="dropdown-item" href="CariKasaCikis.php?id=<?= $carim["id"] ?>">NAKİ ÖDEME YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="btn-label">
            <i class="fas fa-building"></i>
          </span> 
          <span class="text">BANKA</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
  <a class="dropdown-item" href="CariBankaGiris.php?id=<?= $carim["id"] ?>">BANKA ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariBankaCikis.php?id=<?= $carim["id"] ?>">BANKA ÖDEMESİ YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="btn-label">
            <i class="fas fa-money-check"></i>
          </span> 
          <span class="text">ÇEK</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
       <a class="dropdown-item" href="CariAlinanCekEkle.php?id=<?= $carim["id"] ?>">ÇEK ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariVerilenCekEkle.php?id=<?= $carim["id"] ?>">ÇEK ÖDEMESİ YAP</a>
  </div>
</div>
</div>
<div class="col-6 col-md-2">
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="btn-label">
            <i class="fas fa-money-check"></i>
          </span> 
          <span class="text">SENET</span>
  </button>
  <div class="dropdown-menu animated fadeIn" aria-labelledby="notifDropdown">
       <a class="dropdown-item" href="CariAlinanSenetEkle.php?id=<?= $carim["id"] ?>">SENET ÖDEMESİ AL</a>
    <a class="dropdown-item" href="CariVerilenSenetEkle.php?id=<?= $carim["id"] ?>">SENET ÖDEMESİ YAP</a>
  </div>
</div>
</div>
</div>

				
					</div>
			</div>
					<div class="card">

<div class="card-header">
<div class="row">
<div class="col-sm-9 col-md-9">

									<h4 class="card-title"><?= $carim['unvani']?> - CARİ RAPORU</h4>
								</div>

<div class="col-sm-3 col-md-3">
<div class="row">
<div class="col-sm-4 col-md-4">
<h4 class="card-title table-head-bg-primary">

</h4>	
</div>
<div class="col-sm-4 col-md-4">
<?php 
 if ($kbilgi["cariduzenle"]==1) {?>															
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariDuzenle.php?id=<?= $carim["id"] ?>'">
																Cari'yi Düzenle
<?php }?>													
</div>
</div>

								
								</div>
</div>


</div>

								<div class="card-body ">

<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-danger card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Toplam Borcu</p>
												<h4 class="card-title"><?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi=".$carim["id"]);
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan=".$carim["id"]);
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>
<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan=".$carim["id"]);
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan=".$carim["id"]);
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>



<?php
$carisatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan=".$carim["id"]);
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
	<?= number_format($cikistoplam, 2, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurcikissonuc=$cikistoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurcikissonuc=$cikistoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurcikissonuc, 2, ',', '.'); ?> TL
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

	</div>
				<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-success card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Toplam Alacağı</p>
												<h4 class="card-title">
<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi=".$carim["id"]);
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan=".$carim["id"]);
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan=".$carim["id"]);
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan=".$carim["id"]);
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>




<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan=".$carim["id"]);
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
	<?= number_format($giristoplam, 2, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurgirissonuc=$giristoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurgirissonuc=$giristoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurgirissonuc, 2, ',', '.'); ?> TL
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

	</div>

				<div class="col-sm-6 col-md-4">
<?php
 
$sayi1  = $cikistoplam;
$sayi2  = $giristoplam;
$kalan  = $sayi1 - $sayi2;
if ($kalan > 0) {
    $renk = "danger";
} 
 elseif ($kalan < 0){
    $renk = "success";
}
elseif ($kalan == 0) {
$renk = "primary";
}

?>
							<div class="card card-stats card-<?= $renk ?> card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Bakiye</p>
												<h4 class="card-title"><?= number_format($kalan, 2, ',', '.');
  ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurkalansonuc=$kalan*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurkalansonuc=$kalan*$DovizKurlari->$kur;
}
?>
<?= number_format($kurkalansonuc, 2, ',', '.'); ?> TL</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

	</div>
<br>



<form action="CariHesapDetayYazdir.php?id=<?= $carim['id']?>" method="POST">
<div class="row">
<div class="col-sm-5 col-md-5">
<input class="tarih form-control" type="text" value="<?php echo date('Y-m-d H:i'); ?>" name="tarih1">
</div>
<div class="col-sm-5 col-md-5">
<input class="tarih form-control" type="text" value="<?php echo date('Y-m-d H:i'); ?>" name="tarih2">
</div>
<div class="col-sm-2 col-md-2">
<button class="btn btn-success">Detaylı Listele</button>
</div>

</div>
</form>
<br>

<div class=" table-responsive">

    <button type="button" class="btn btn-primary" onclick="tiklama('kopyala');">
           <span class="btn-label">
            <i class="far fa-clipboard"></i>
          </span> 
          <span class="text">Kopyala</span>
        </button>
     <button type="button" class="btn btn-warning" onclick="tiklama('yazdir');">
           <span class="btn-label">
            <i class="fas fa-print"></i>
          </span> 
          <span class="text">Yazdır</span>
        </button>
 
   <button type="button" class="btn btn-success" onclick="tiklama('excel');">
           <span class="btn-label">
            <i class="far fa-file-excel"></i>
          </span> 
          <span class="text">Excel</span>
        </button>
   <button type="button" class="btn btn-danger" onclick="tiklama('pdf');">
           <span class="btn-label">
            <i class="far fa-file-pdf"></i>
          </span> 
          <span class="text">PDF</span>
        </button>
   <button type="button" class="btn btn-info" onclick="tiklama('csv');">
           <span class="btn-label">
            <i class="far fa-file-csv"></i>
          </span> 
          <span class="text">CSV</span>
        </button>

<br>


<table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover">
	
                                                       <thead>
                                                            <tr class="g-y100">
                                        
 <th>Tarih</th>                
<th>İşlem</th> 

<th>Açıklama</th>
<th>Borç</th>
<th>Alacak</th>
<th>Kalan</th>
<th>İşlem</th>
  </tr>
</thead>
        <tbody>  
     <?php $sorgu1 = $baglanti->query("SELECT id,faturatarihi,odemetipi,faturanumarasi,faturaseri,odeme,geneltoplam FROM AlFatBilgi where cariadi='$carim[id]' UNION ALL SELECT id,faturatarihi,odemetipi,faturanumarasi,faturaseri,odeme,geneltoplam FROM SatFatBilgi where cariadi='$carim[id]' UNION ALL SELECT id,islemtarihi,islem,evraknumarasi,islem,aciklama,tutar FROM KasaGiris where unvan='$carim[id]' UNION ALL SELECT id,islemtarihi,islem,evraknumarasi,islem,aciklama,tutar FROM BankaGiris where unvan='$carim[id]' UNION ALL SELECT id,islemtarihi,islem,ceknumarasi,durum,aciklama,tutar FROM CekSenet where unvan='$carim[id]' UNION ALL SELECT id,islemtarihi,islem,islem,aciklama,aciklama,tutar FROM CariIslem where unvan='$carim[id]' order by faturatarihi asc")->fetchAll();

                                                            foreach ($sorgu1 as $sonuc1) {
                                                        ?> 
<tr>
	      <td>
<?= $sonuc1['faturatarihi']?>
</td>
 	      <td>
<?php
if ($sonuc1['odemetipi'] == "alis") {?> 
Alış Faturası
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "satis") {?> 
Satış Faturası
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankagirdi") {?> 
Banka Tahsilat
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasagirdi") {?> 
Nakit Tahsilat
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankacikti") {?> 
Banka Ödeme
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasacikti") {?> 
Nakit Ödeme
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alinan") {?> 
Alınan Çek Senet
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "verilen") {?> 
Verilen Çek Senet
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "borc") {?> 
Cari Borçlandırma
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alacak") {?> 
Cari Alacaklandırma
<?php } ?>



</td>  

	      <td>
<?= $sonuc1['odeme']?> 
</td>  
	      <td class="text-danger">
<?php

if ($sonuc1['odemetipi'] == "satis") {
$cikis = $sonuc1['geneltoplam'];
echo number_format($cikis, 2, ',', '.');

}

elseif ($sonuc1['odemetipi'] == "bankacikti") {
$cikis = $sonuc1['geneltoplam'];
echo number_format($cikis, 2, ',', '.');

}
elseif ($sonuc1['odemetipi'] == "kasacikti") {
$cikis = $sonuc1['geneltoplam'];
echo number_format($cikis, 2, ',', '.');

}

elseif ($sonuc1['odemetipi'] == "verilen") {
$cikis = $sonuc1['geneltoplam'];
echo number_format($cikis, 2, ',', '.');

}
elseif ($sonuc1['odemetipi'] == "borc") {
$cikis = $sonuc1['geneltoplam'];
echo number_format($cikis, 2, ',', '.');

}
else {
$cikis = "0";

	}
?> 
</td>  
	      <td class="text-success">
<?php

if ($sonuc1['odemetipi'] == "alis") {
$giris = $sonuc1['geneltoplam'];
echo number_format($giris, 2, ',', '.');

}

elseif ($sonuc1['odemetipi'] == "bankagirdi") {
$giris = $sonuc1['geneltoplam'];
echo number_format($giris, 2, ',', '.');

}
elseif ($sonuc1['odemetipi'] == "kasagirdi") {
$giris = $sonuc1['geneltoplam'];
echo number_format($giris, 2, ',', '.');

}

elseif ($sonuc1['odemetipi'] == "alinan") {
$giris = $sonuc1['geneltoplam'];
echo number_format($giris, 2, ',', '.');

}
elseif ($sonuc1['odemetipi'] == "alacak") {
$giris = $sonuc1['geneltoplam'];
echo number_format($giris, 2, ',', '.');

}
else {
$giris = "0";

	}
?> 
</td>   
<td>
<?php

$toplam  = $toplam + $cikis - $giris;
if ($toplam > 0) {
    $renk = "danger";
} 
 elseif ($toplam < 0){
    $renk = "success";
}
elseif ($toplam == 0) {
$renk = "primary";
}
?>
<span class="text-<?= $renk ?>">
	<?= number_format($toplam, 2, ',', '.');
  ?>
	</span>
</td>  
<td>
<div class="form-button-action">
<?php
if ($sonuc1['odemetipi'] == "alis") {?> 
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" id="alisfatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "satis") {?> 
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" id="satisfatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasagirdi") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="kasaodeme btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasacikti") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="kasaodeme btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankagirdi") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="bankaodeme btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankacikti") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="bankaodeme btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alinan") {?> 
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" id="cek" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "verilen") {?> 
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" id="cek" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "borc") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="cariislem btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alacak") {?> 
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc1['id']?>" class="cariislem btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
<?php } ?>


<?php
if ($sonuc1['odemetipi'] == "alis") {?> 
		<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariAlisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "satis") {?> 
		<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariSatisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasagirdi") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariKasaGirisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasacikti") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariKasaCikisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankagirdi") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariBankaGirisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankacikti") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariBankaCikisDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alinan") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariAlinanCekDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "verilen") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariVerilenCekDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "borc") {?> 
		<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CCariBorclandirDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alacak") {?> 
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CCariAlacaklandirDuzenle.php?id=<?= $sonuc1["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php } ?>

<?php
if ($sonuc1['odemetipi'] == "alis") {?> 
<button id="alissil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "satis") {?> 
	<button id="satissil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasagirdi") {?> 
<button id="kasagirdisil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "kasacikti") {?> 
<button id="kasaciktisil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankagirdi") {?> 
<button id="bankagirdisil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "bankacikti") {?> 
<button id="bankaciktisil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alinan") {?> 
<button id="alinansil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "verilen") {?> 
<button id="verilensil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "borc") {?> 
<button id="borcsil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
<?php
if ($sonuc1['odemetipi'] == "alacak") {?> 
<button id="alacaksil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc1["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php } ?>
</div>
</td>   
  </tr>
	<?php } ?>		
  <tr>
                <td class="text-primary"><?php echo date('Y-m-d H:i'); ?></td>
                <td class="text-primary">-----</td>
                <td class="text-primary">Tarihi  İle Hesap Durumu</td>
                <td class="text-danger"><?= number_format($cikistoplam, 4, ',', '.'); ?>  <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurcikissonuc=$cikistoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurcikissonuc=$cikistoplam*$DovizKurlari->$kur;

}
?>
<?= number_format($kurcikissonuc, 4, ',', '.'); ?> TL</td>
                <td class="text-success"><?= number_format($giristoplam, 4, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurgirissonuc=$giristoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurcgirissonuc=$giristoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurgirissonuc, 4, ',', '.'); ?> TL</td>
                <td class="text-<?= $renk ?>"><?= number_format($kalan, 4, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurkalansonuc=$kalan*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurkalansonuc=$kalan*$DovizKurlari->$kur;
}
?>
<?= number_format($kurkalansonuc, 4, ',', '.'); ?> TL</td>

<?php
if ($kalan > 0) {?> 
 <td class="text-danger">BORÇLU</td>
	<?php } ?>
<?php
if ($kalan < 0) {?> 
 <td class="text-success">ALACAKLI</td>
	<?php } ?>
<?php
if ($kalan == 0) {?> 
 <td class="text-primary">HESAP YOK</td>
	<?php } ?>


            </tr>			
                                                                                
                                                        </tbody>

         
 
                                                    </table>
							</div>
									
									
					
			</div>
					
					</div>
<div class="modal fade bd-example-modal-lg" id="goster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">İŞLEM DETAYI</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">

                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="Resimler/hesapp.gif">
                       	   </div>                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>    

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>	


				</div>
				</div>
			</div>
	</div>
	
<div type="hidden" id="sonuc">
	</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
		</div>
		
	</div>
	
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
?>
<script>
        $(document).ready(function(){
    $(document).on('click', '#alissil', function(e){
           var alis = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'alissil='+alis, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#satissil', function(e){
           var satis = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'satissil='+satis, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#kasagirdisil', function(e){
           var kasagirdi = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'kasagirdisil='+kasagirdi, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#kasaciktisil', function(e){
           var kasacikti = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'kasaciktisil='+kasacikti, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#bankagirdisil', function(e){
           var bankagirdi = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'bankagirdisil='+bankagirdi, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#bankaciktisil', function(e){
           var bankacikti = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'bankaciktisil='+bankacikti, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#alinansil', function(e){
           var alinan = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'alinansil='+alinan, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#verilensil', function(e){
           var verilen = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'verilensil='+verilen, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#alacaksil', function(e){
           var alacak = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'alacaksil='+alacak, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                                window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
    $(document).on('click', '#borcsil', function(e){
           var borc = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/CariIslemSil.php", // POST işleminin olacağı sayfa
                    data: 'borcsil='+borc, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

<script>
$(document).ready(function(){
	
	$(document).on('click', '#alisfatura', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/AlisGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#satisfatura', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/SatisGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#cek', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/CekSenetGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '.kasaodeme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/KasaOdemeGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '.bankaodeme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/BankaOdemeGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '.cariislem', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/CariIslemGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>
</body>
</html>
