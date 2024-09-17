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
	
	<title><?= $carim['unvani']?> - CARİ DETAYLI RAPORU - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
require("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
?>
		</div>
<?php
require("Tablolar/sol.php"); //sol menü
?>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				
					<div class="card" id="yazdir">
								<div class="card-header">
								<div class="row">
<div class="col-sm-10 col-md-10">

									<h4 class="card-title"><?= $carim['unvani']?> - CARİ DETAYLI RAPORU</h4>
								</div>
<div class="col-sm-2 col-md-2">
	<button type="button" data-toggle="tooltip" title="Yazdır" class="btn btn-icon btn-danger" data-original-title="Yazdır" onclick="yazdir()">
																<i class="fas fa-print"></i>
															</button>
								</div>
								</div>
								<div class="card-body">
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
$carisatis = $carisatistoplam;
$cikistoplam  = $fatsatis + $ceksatis + $bankasatis + $kasasatis + $carisatis;
?>
	<?= number_format($cikistoplam, 4, ',', '.');
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
$carialis = $carialistoplam;
$giristoplam  = $fatalis + $cekalis + $bankaalis + $kasaalis + $carialis;
?>
	<?= number_format($giristoplam, 2, ',', '.');
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
$kurgirissonuc=$giristoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurgirissonuc=$giristoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurgirissonuc, 2, ',', '.'); ?> TL</h4>
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
    $renk = danger;
} 
 elseif ($kalan < 0){
    $renk = success;
}
elseif ($kalan == 0) {
$renk = primary;
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
												<h4 class="card-title"><?= number_format($kalan, 4, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carim["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
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

<form action="" method="POST">
<div class="row">
<div class="col-sm-5 col-md-5">
<input class="tarih form-control" type=text" value="<?php echo date('Y-m-d H:i'); ?>" name="tarih1">
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
	<div class="table-responsive">
<table class="table table-bordered table-head-bg-secondary">
<thead>

<tr>                                 
  <th>Açıklama</th>
<th>Borç</th>
<th>Alacak</th>                     
<th>Kalan</th>   
  </tr>

</thead>
 
<tr>
     <?php
$tarih = $_POST["tarih1"];
?>

<td>
<h2 class="fas fa-clock text-success"></h2> <span class="text-success"><?php echo "$tarih"; ?></span>  Tarihinden Önceki Bakiye Durumunu.
</td>
<td class="text-danger">
<?php
$fatsatistopla1=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi='$carim[id]' and faturatarihi < '$tarih'");
$fatsatistopla1->execute();
$fatsatisyaz1= $fatsatistopla1->fetch();
$fatsatistoplam1=$fatsatisyaz1['satis'];
?>
<?php
$ceksatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$ceksatistopla1->execute();
$ceksatisyaz1= $ceksatistopla1->fetch();
$ceksatistoplam1=$ceksatisyaz1['satis'];
?>
<?php
$bankasatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$bankasatistopla1->execute();
$bankasatisyaz1= $bankasatistopla1->fetch();
$bankasatistoplam1=$bankasatisyaz1['satis'];
?>
<?php
$kasasatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$kasasatistopla1->execute();
$kasasatisyaz1= $kasasatistopla1->fetch();
$kasasatistoplam1=$kasasatisyaz1['satis'];
?>


	<?php
$carisatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$carisatistopla1->execute();
$carisatisyaz1= $carisatistopla1->fetch();
$carisatistoplam1=$carisatisyaz1['satis'];
?>


<?php
 
$fatsatis1  = $fatsatistoplam1;
$ceksatis1  = $ceksatistoplam1;
$bankasatis1  = $bankasatistoplam1;
$kasasatis1  = $kasasatistoplam1;
$carisatis1 = $carisatistoplam1;
$cikistoplam1  = $fatsatis1 + $ceksatis1 + $bankasatis1 + $kasasatis1 + $carisatis1;
?>
	<?= number_format($cikistoplam1, 2, ',', '.');
  ?>
</td>
<td class="text-success">
<?php
$fatalistopla1=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi='$carim[id]' and faturatarihi < '$tarih'");
$fatalistopla1->execute();
$fatalisyaz1= $fatalistopla1->fetch();
$fatalistoplam1=$fatalisyaz1['alis'];
?>
<?php
$cekalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$cekalistopla1->execute();
$cekalisyaz1= $cekalistopla1->fetch();
$cekalistoplam1=$cekalisyaz1['alis'];
?>
<?php
$bankaalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$bankaalistopla1->execute();
$bankaalisyaz1= $bankaalistopla1->fetch();
$bankaalistoplam1=$bankaalisyaz1['alis'];
?>
<?php
$kasaalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$kasaalistopla1->execute();
$kasaalisyaz1= $kasaalistopla1->fetch();
$kasaalistoplam1=$kasaalisyaz1['alis'];
?>


	<?php
$carialistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan='$carim[id]' and islemtarihi < '$tarih'");
$carialistopla1->execute();
$carialisyaz1= $carialistopla1->fetch();
$carialistoplam1=$carialisyaz1['alis'];
?>


<?php
 
$fatalis1  = $fatalistoplam1;
$cekalis1  = $cekalistoplam1;
$bankaalis1  = $bankaalistoplam1;
$kasaalis1  = $kasaalistoplam1;
$carialis1 = $carialistoplam1;
$giristoplam1  = $fatalis1 + $cekalis1 + $bankaalis1 + $kasaalis1 + $carialis1;
?>
	<?= number_format($giristoplam1, 2, ',', '.');
  ?>
</td>
<td>
<?php
 
$sayi1  = $cikistoplam1;
$sayi2  = $giristoplam1;
$kalan1  = $sayi1 - $sayi2;
if ($kalan1 > 0) {
    $renk = danger;
} 
 elseif ($kalan1 < 0){
    $renk = success;
}
elseif ($kalan1 == 0) {
$renk = primary;
}

?>
	<?= number_format($kalan1, 2, ',', '.');
  ?>
</td>
   	<div class="table-responsive">
     <?php
$tarih1 = $_POST["tarih1"];
$tarih2 = $_POST["tarih2"];
$sorgu1 = $baglanti->query("SELECT id,faturatarihi,odemetipi,odeme,geneltoplam FROM AlFatBilgi where cariadi='$carim[id]' and faturatarihi between '$tarih1' and '$tarih2' UNION ALL SELECT id,faturatarihi,odemetipi,odeme,geneltoplam FROM SatFatBilgi where cariadi='$carim[id]' and faturatarihi between '$tarih1' and '$tarih2' UNION ALL SELECT id,islemtarihi,islem,aciklama,tutar FROM KasaGiris where unvan='$carim[id]' and islemtarihi between '$tarih1' and '$tarih2' UNION ALL SELECT id,islemtarihi,islem,aciklama,tutar FROM BankaGiris where unvan='$carim[id]' and islemtarihi between '$tarih1' and '$tarih2' UNION ALL SELECT id,islemtarihi,islem,aciklama,tutar FROM CekSenet where unvan='$carim[id]' and islemtarihi between '$tarih1' and '$tarih2' UNION ALL SELECT id,islemtarihi,islem,aciklama,tutar FROM CariIslem where unvan='$carim[id]' and islemtarihi between '$tarih1' and '$tarih2' order by faturatarihi asc")->fetchAll();

                                                            foreach ($sorgu1 as $sonuc1) {
                                                        ?> 
					<table class="table table-head-bg-primary table-bordered">
<thead>
<tr>
<th>
İŞLEM TARİHİ
</th>
<th>
İŞLEM TÜRÜ
</th>
<th>
AÇIKLAMA
</th>
<th>
BORÇ
</th>
<th>
ALACAK
</th>
<th>
KALAN
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<?= $sonuc1['faturatarihi']?>
</td>
<td>
<?php

if ($sonuc1['odemetipi'] == "alis") {
  echo "Alış Faturası";
}
elseif ($sonuc1['odemetipi'] == "satis") {
echo "Satış Faturası";
}
elseif ($sonuc1['odemetipi'] == "bankagirdi") {
echo "Banka Tahsilat";
}
elseif ($sonuc1['odemetipi'] == "kasagirdi") {
echo "Nakit Tahsilat";
}
elseif ($sonuc1['odemetipi'] == "bankacikti") {
echo "Banka Ödeme";
}
elseif ($sonuc1['odemetipi'] == "kasacikti") {
echo "Nakit Ödeme";
}
elseif ($sonuc1['odemetipi'] == "alinan") {
echo "Alınan Çek Senet";
}
elseif ($sonuc1['odemetipi'] == "verilen") {
echo "Verilen Çek Senet";
}
elseif ($sonuc1['odemetipi'] == "borc") {
echo "Cari Borçlandırma";
}
elseif ($sonuc1['odemetipi'] == "alacak") {
echo "Cari Alacaklandırma";
}
?> 
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
$cikis = 0;
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
$giris = 0;

	}
?> 
</td>
<td>
<?php
$toplam  = $toplam + $cikis - $giris;
if ($toplam > 0) {
    $renk = danger;
} 
 elseif ($toplam < 0){
    $renk = success;
}
elseif ($toplam == 0) {
$renk = primary;
}

?>
<span class="text-<?= $renk ?>">
	<?= number_format($toplam, 2, ',', '.');
  ?>
</td>
</tr>
</tbody>
<tbody>
<tr>
<?php
if ($sonuc1['odemetipi'] == "alis") {?>

<table class="table table-head-bg-warning table-bordered">
<thead>
<tr>
<th>
ÜRÜN KODU
</th>
<th>
ÜRÜN ADI
</th>
<th>
MİKTAR
</th>
<th>
BİRİM
</th>
<th>
BİRİM FİYATI
</th>
<th>
VERGİ TUTARI
</th>
<th>
TOPLAM
</th>
</th>
</thead>
<tbody>
  <?php $alfatbag = $baglanti->query("SELECT * FROM AlFatBag where bilgiid='$sonuc1[id]'")->fetchAll();
foreach ($alfatbag as $alfatbagim) {
 ?> 
     <?php $alisfatura = $baglanti->query("SELECT * FROM AlisFaturasi where id='$alfatbagim[faturaid]'")->fetchAll();
foreach ($alisfatura as $alisfaturam) {
 ?>  
     <?php $urun = $baglanti->query("SELECT * FROM Urunler where id='$alisfaturam[urunadi]'")->fetchAll();

foreach ($urun as $urunum) {
 ?> 
<tr>
<td>
<?= $urunum['urunkodu']?>
</td>
<td>
<?= $urunum['urunadi']?> - <?php $sorgu6 = $baglanti->query("SELECT * FROM Modeller where id='$urunum[modeli]'")->fetchAll();

foreach ($sorgu6 as $sonuc6) {
 ?> 
<?= $sonuc6['modeladi']?>
<?php } ?> - <?php $sorgu7 = $baglanti->query("SELECT * FROM Markalar where id='$urunum[markasi]'")->fetchAll();

foreach ($sorgu7 as $sonuc7) {
 ?> 
<?= $sonuc7['markaadi']?>
<?php } ?>
</td>
<td>
<?= $alisfaturam['adet']?>
</td>
<td>
     <?php $sorgu5 = $baglanti->query("SELECT * FROM Birim where id='$urunum[birimadi]'")->fetchAll();

foreach ($sorgu5 as $sonuc5) {
 ?> 
<?= $sonuc5['birimadi']?>
<?php } ?>
</td>
<td>
<?= number_format($alisfaturam['fiyat'], 2, ',', '.');?>
</td>
<td>
<?= number_format($alisfaturam['kdvtutar'], 2, ',', '.');?>
</td>
<td>
<?= number_format($alisfaturam['kdvlitoplam'], 2, ',', '.');?>
</td>
</tr>
 <?php } ?>
 <?php } ?>
 <?php } ?>
</tbody>
</table>

 <?php } ?>
<?php
if ($sonuc1['odemetipi'] == "satis") {?>

<table class="table table-head-bg-warning table-bordered">
<thead>
<tr>
<th>
ÜRÜN KODU
</th>
<th>
ÜRÜN ADI
</th>
<th>
MİKTAR
</th>
<th>
BİRİM
</th>
<th>
BİRİM FİYATI
</th>
<th>
VERGİ TUTARI
</th>
<th>
TOPLAM
</th>
</th>
</thead>
<tbody>
  <?php $satfatbag = $baglanti->query("SELECT * FROM SatFatBag where bilgiid='$sonuc1[id]'")->fetchAll();
foreach ($satfatbag as $satfatbagim) {
 ?> 
     <?php $satisfatura = $baglanti->query("SELECT * FROM SatisFaturasi where id='$satfatbagim[faturaid]'")->fetchAll();
foreach ($satisfatura as $satisfaturam) {
 ?>  
     <?php $urun = $baglanti->query("SELECT * FROM Urunler where id='$satisfaturam[urunadi]'")->fetchAll();

foreach ($urun as $urunum) {
 ?> 
<tr>
<td>
<?= $urunum['urunkodu']?>
</td>
<td>
<?= $urunum['urunadi']?> - <?php $sorgu6 = $baglanti->query("SELECT * FROM Modeller where id='$urunum[modeli]'")->fetchAll();

foreach ($sorgu6 as $sonuc6) {
 ?> 
<?= $sonuc6['modeladi']?>
<?php } ?> - <?php $sorgu7 = $baglanti->query("SELECT * FROM Markalar where id='$urunum[markasi]'")->fetchAll();

foreach ($sorgu7 as $sonuc7) {
 ?> 
<?= $sonuc7['markaadi']?>
<?php } ?>
</td>
<td>
<?= $satisfaturam['adet']?>
</td>
<td>
     <?php $sorgu5 = $baglanti->query("SELECT * FROM Birim where id='$urunum[birimadi]'")->fetchAll();

foreach ($sorgu5 as $sonuc5) {
 ?> 
<?= $sonuc5['birimadi']?>
<?php } ?>
</td>
<td>
<?= number_format($satisfaturam['fiyat'], 2, ',', '.');?>
</td>
<td>
<?= number_format($satisfaturam['kdvtutar'], 2, ',', '.');?>
</td>
<td>
<?= number_format($satisfaturam['kdvlitoplam'], 2, ',', '.');?>
</td>
</tr>
 <?php } ?>
 <?php } ?>
 <?php } ?>
</tbody>
</table>

 <?php } ?>
<BR>
</tr>
</tbody>
</table>
 <?php } ?>

<table class="table table-bordered table-head-bg-secondary">
<thead>
<tr>                                 
  <th>Açıklama</th>
<th>Borç</th>
<th>Alacak</th>                     
<th>Kalan</th>   
  </tr>
</thead>
 
<tr>
     <?php
$tarih = $_POST["tarih2"];
?>

<td>
<h2 class="fas fa-clock text-success"></h2> <span class="text-success"><?php echo "$tarih"; ?></span>  Tarihinden Sonraki Bakiye Durumunu.
</td>
<td class="text-danger">
<?php
$fatsatistopla1=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi='$carim[id]' and faturatarihi > '$tarih'");
$fatsatistopla1->execute();
$fatsatisyaz1= $fatsatistopla1->fetch();
$fatsatistoplam1=$fatsatisyaz1['satis'];
?>
<?php
$ceksatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$ceksatistopla1->execute();
$ceksatisyaz1= $ceksatistopla1->fetch();
$ceksatistoplam1=$ceksatisyaz1['satis'];
?>
<?php
$bankasatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='cikti' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$bankasatistopla1->execute();
$bankasatisyaz1= $bankasatistopla1->fetch();
$bankasatistoplam1=$bankasatisyaz1['satis'];
?>
<?php
$kasasatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='cikti' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$kasasatistopla1->execute();
$kasasatisyaz1= $kasasatistopla1->fetch();
$kasasatistoplam1=$kasasatisyaz1['satis'];
?>


<?php
$ceksatisimtopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and ceksenet='cek' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$ceksatisimtopla1->execute();
$ceksatisimyaz1= $ceksatisimtopla1->fetch();
$ceksatisimtoplam1=$ceksatisimyaz1['satis'];
?>
	<?php
$carisatistopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$carisatistopla1->execute();
$carisatisyaz1= $carisatistopla1->fetch();
$carisatistoplam1=$carisatisyaz1['satis'];
?>
<?php
$senetsatisimtopla1=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and ceksenet='senet' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$senetsatisimtopla1->execute();
$senetsatisimyaz1= $senetsatisimtopla1->fetch();
$senetsatisimtoplam1=$senetsatisimyaz1['satis'];
?>

<?php
 
$fatsatis1  = $fatsatistoplam1;
$ceksatis1  = $ceksatistoplam1;
$bankasatis1  = $bankasatistoplam1;
$kasasatis1  = $kasasatistoplam1;
$carisatis1 = $carisatistoplam1;
$cikistoplam1  = $fatsatis1 + $ceksatis1 + $bankasatis1 + $kasasatis1 + $carisatis1;
?>
	<?= number_format($cikistoplam1, 2, ',', '.');
  ?>
</td>
<td class="text-success">
<?php
$fatalistopla1=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi='$carim[id]' and faturatarihi > '$tarih'");
$fatalistopla1->execute();
$fatalisyaz1= $fatalistopla1->fetch();
$fatalistoplam1=$fatalisyaz1['alis'];
?>
<?php
$cekalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$cekalistopla1->execute();
$cekalisyaz1= $cekalistopla1->fetch();
$cekalistoplam1=$cekalisyaz1['alis'];
?>
<?php
$bankaalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$bankaalistopla1->execute();
$bankaalisyaz1= $bankaalistopla1->fetch();
$bankaalistoplam1=$bankaalisyaz1['alis'];
?>
<?php
$kasaalistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$kasaalistopla1->execute();
$kasaalisyaz1= $kasaalistopla1->fetch();
$kasaalistoplam1=$kasaalisyaz1['alis'];
?>

	<?php
$carialistopla1=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan='$carim[id]' and islemtarihi > '$tarih'");
$carialistopla1->execute();
$carialisyaz1= $carialistopla1->fetch();
$carialistoplam1=$carialisyaz1['alis'];
?>


<?php
 
$fatalis1  = $fatalistoplam1;
$cekalis1  = $cekalistoplam1;
$bankaalis1  = $bankaalistoplam1;
$kasaalis1  = $kasaalistoplam1;
$carialis1 = $carialistoplam1;
$giristoplam1  = $fatalis1 + $cekalis1 + $bankaalis1 + $kasaalis1 + $carialis1;
?>
	<?= number_format($giristoplam1, 2, ',', '.');
  ?>
</td>
<td>
<?php
 
$sayi1  = $cikistoplam1;
$sayi2  = $giristoplam1;
$kalan1  = $sayi1 - $sayi2;
if ($kalan1 > 0) {
    $renk = danger;
} 
 elseif ($kalan1 < 0){
    $renk = success;
}
elseif ($kalan1 == 0) {
$renk = primary;
}

?>
	<?= number_format($kalan1, 2, ',', '.');
  ?>
</td>
</tr>
</table>								
	</div>									
					</div>
			</div>
					
					
				</div>
			</div>
			<div type="hidden" id="result">
	</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
		</div>
		
	</div>
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
?>

</body>
</html>

	