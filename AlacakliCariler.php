<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Alacaklı Cariler - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
				
					<div class="card">


<div class="card-header">
<div class="row">
<div class="col-sm-9 col-md-9">

									<h4 class="card-title">ALACAKLI CARİLER</h4>
								</div>

<div class="col-sm-3 col-md-3">
<div class="row">
<div class="col-sm-9 col-md-9">
	
</div>
<div class="col-sm-3 col-md-3">
<div class="form-button-action">
												
															

										
														</div>

</div>
</div>

								
								</div>
</div>


</div>

								<div id="yazdir" class="card-body ">
	
<div class=" table-responsive">
<div class="form-button-action">
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

</div>
<br>
      <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>Cari Kodu</th>                                          
 <th>Cari Adı</th>
  <th>Veri No - TCKN</th>
<th>Vergi Dairesi</th>
<th>İlçe</th>
<th>İl</th>                   
<th>Borç</th>      

  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php
			

						$sorgu = $baglanti->prepare('Select * from Cariler'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgu->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>
  <?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi=".$sonuc["id"]);
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan=".$sonuc["id"]);
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>
<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan=".$sonuc["id"]);
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan=".$sonuc["id"]);
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>
	<?php
$carisatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan=".$sonuc["id"]);
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

<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi=".$sonuc["id"]);
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan=".$sonuc["id"]);
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan=".$sonuc["id"]);
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan=".$sonuc["id"]);
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>
	<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan=".$sonuc["id"]);
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

<?php
 
$sayi1  = $cikistoplam;
$sayi2  = $giristoplam;
$kalan  = $sayi1 - $sayi2;
if ($kalan < 0) {
?>




<tr id="secilen" class="Satirekle">
	      <td class="carikodu"><?= $sonuc['id']?></td>
                    <td class="cariadi"><?= $sonuc['unvani']?></td>
     <td class="tckn"><?= $sonuc['verginumarasi']?></td>
  <td class="daire"><?= $sonuc['dairesi']?></td>   
                    <td class="ilce"><?= $sonuc['ilce']?></td>
<td class="il"><?= $sonuc['il']?></td>
  <td class="borc">

	<span class="text-success">
	<?= number_format($kalan, 2, ',', '.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($parabirimi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($parabirimi as $parabirimim){
                                                            ?>
                                                    
                                                     <?php echo $parabirimim['kisaltma']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
  	</span>
</td>    

 
             
  </tr>

			<?php
						}  // While Bitiş

						?>
									<?php
						}  // While Bitiş

						?>
						           
                                                                                
                                                        </tbody>
                                                    </table>
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


</body>
</html>

	