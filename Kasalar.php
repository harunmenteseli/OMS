<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Kasalar - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Kasa Listesi</h4>
								</div>
								<div class="card-body ">
	<?php 
 if ($kbilgi["kasaekle"]==1) {?>
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='KasaEkle.php'">
Kasa Ekle</button>
<?php }?>
<br>
<div class="table-responsive">
      <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
                                    
  <th>Kasa Adı</th> 
    <th>Giriş Toplam</th>         
   <th>Çıkış Toplam</th>   
   <th>Kalan</th>         
<th>İşlem</th> 
  </tr>
</thead>
<?php $sorgu = $baglanti->query("SELECT * FROM Kasalar")->fetchAll();
foreach ($sorgu as $sonuc) {
?> 
<tr>

<td><?= $sonuc['kasaadi']?></td>
<td class="text-right">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>
<?php
$kasagiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM KasaGiris where islem='kasagirdi' and kasaadi='$sonuc[id]' and parabirimi='$parabirimi[id]'");
$kasagiristopla->execute();
$kasagirisyaz= $kasagiristopla->fetch();
$kasagiristoplam=$kasagirisyaz['girisler'];
?>	
<span class="text-success"><?= number_format($kasagiristoplam, 2, ',', '.');?> <?= $parabirimi["kisaltma"] ?></span> <span class="text-warning">(<?php	
if ($parabirimi['kur'] == "TL") {
$kasagiristutarsonuc=$kasagiristoplam*1;
} 
 else{
$kur = $parabirimi['kur'];
$kasagiristutarsonuc=$kasagiristoplam*$DovizKurlari->$kur;
}
?>
<?= number_format ($kasagiristutarsonuc,2,',','.'); ?> TL)</span>
<br>


<?php }?> 
</td>
<td class="text-right">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>
<?php
$kasacikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM KasaGiris where islem='kasacikti' and kasaadi='$sonuc[id]' and parabirimi='$parabirimi[id]'");
$kasacikistopla->execute();
$kasacikisyaz= $kasacikistopla->fetch();
$kasacikistoplam=$kasacikisyaz['cikislar'];
?>	
<span class="text-danger"><?= number_format($kasacikistoplam, 4, ',', '.');?> <?= $parabirimi["kisaltma"] ?></span> <span class="text-warning">(<?php	
if ($parabirimi['kur'] == "TL") {
$kasacikistutarsonuc=$kasacikistoplam*1;
} 
 else{
$kur = $parabirimi['kur'];
$kasacikistutarsonuc=$kasacikistoplam*$DovizKurlari->$kur;
}
?>
<?= number_format ($kasacikistutarsonuc,2,',','.'); ?> TL)</span>
<br>
<?php }?> 
</td>
<td class="text-right">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>


<?php
$kalangiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM KasaGiris where islem='kasagirdi' and kasaadi='$sonuc[id]' and parabirimi='$parabirimi[id]'");
$kalangiristopla->execute();
$kalangirisyaz= $kalangiristopla->fetch();
$kalangiristoplam=$kalangirisyaz['girisler'];
?>
<?php
$kalancikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM KasaGiris where islem='kasacikti' and kasaadi='$sonuc[id]' and parabirimi='$parabirimi[id]'");
$kalancikistopla->execute();
$kalancikisyaz= $kalancikistopla->fetch();
$kalancikistoplam=$kalancikisyaz['cikislar'];
?>	
<?php
 $sayi1  = $kalancikistoplam;
$sayi2  = $kalangiristoplam;
$kalan  = $sayi2 - $sayi1;
if ($kalan < 0) {
    $renk = "danger";
} 
 elseif ($kalan > 0){
    $renk = "success";
}
elseif ($kalan == 0) {
$renk = "primary";
}

?>
	<span class="text-<?= $renk ?>">
	<?= number_format($kalan, 2, ',', '.');?> <?= $parabirimi["kisaltma"] ?> <span class="text-warning">(<?php	
if ($parabirimi['kur'] == "TL") {
$kurtutarsonuc=$kalan*1;
} 
 else{
$kur = $parabirimi['kur'];
$kurtutarsonuc=$kalan*$DovizKurlari->$kur;
}
?>
<?= number_format ($kurtutarsonuc,2,',','.'); ?> TL)</span>
<br>
  	</span>
<?php }?> 


  	
  </td>
<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="İncele" class="btn btn-icon btn-round btn-info" data-original-title="İncele" onclick="window.location.href='KasaGirisDetay.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-search"></i>
															</button>
															
			<?php 
 if ($kbilgi["kasaduzenle"]==1) {?>															
										<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='KasaDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>
				<?php 
 if ($kbilgi["kasasil"]==1) {?>
			<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php }?>
															
														</div>
													</td>
</tr>
 <?php } ?>				
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
<script type="text/javascript">
$(document).ready(function(){
        $(function(){
         $("#modeller option").hide();
            $("#markalar").change(function(){
                
                $("#modeller option").hide();
                var slug = $("#markalar option:selected").attr("slug");
                if(slug){
                $("#modeller option[marka-slug='"+slug+"']").show();
                }
            });
        });
    });
</script>
</body>
</html>

	