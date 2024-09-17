<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
require("../Tablolar/tasarim.php"); 
?>
<?php
		 
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
	$sorgu = $baglanti->prepare("SELECT * FROM SatFatBilgi Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>
			
<button type="button" data-toggle="tooltip" title="Yazdır" class="btn btn-icon btn-danger" data-original-title="Yazdır" onclick="yazdirma()">
																<i class="fas fa-print"></i>
															</button>
<div id="yazdirma">		
<div class="row row-card-no-pd">


			<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="flaticon-user"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FATURA ÜNVANI</p>
												<h4 class="card-title text-success">
<?php 
                                                      $cariler = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["cariadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cariler)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($cariler as $cari){
                                                            ?>
                                                    
                                                     <?php echo $cari['unvani']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

			<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-warning bubble-shadow-small">
												<i class="flaticon-calendar"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FATURA TARİHİ</p>
												<h4 class="card-title text-warning">
<?= $sonuc['faturatarihi']?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

			<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-danger bubble-shadow-small">
												<i class="flaticon-shapes-1"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FATURA NUMARASI</p>
												<h4 class="card-title text-danger">
<?= $sonuc['faturaseri']?> - <?= $sonuc['faturanumarasi']?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

			<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="flaticon-technology"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FATURA TUTAR</p>
												<h4 class="card-title text-primary">
<?= number_format($sonuc['geneltoplam'], 2, ',', '.');?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
		<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="flaticon-technology"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">DEPO</p>
												<h4 class="card-title text-info">
<?php $depo = $baglanti->query("SELECT * FROM Depolar where id=".$sonuc["depo"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count(depo)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($depo as $deposu){
                                                            ?>
                                                    
                                                     <?php echo $deposu['depoadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="fas fa-user-plus"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">EKLEYEN</p>
												<h4 class="card-title text-secondary">
 <?php 
                                                      $kullanicilar= $baglanti->query("SELECT * FROM Kullanicilar where id=".$sonuc["ekleyen"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($kullanicilar)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($kullanicilar as $kullanici){
                                                            ?>
                                                    
                                                     <?php echo $kullanici['ad']; ?> <?php echo $kullanici['soyad']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
	</div>
<div class="col-sm-12 col-md-12">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="fas fa-sticky-note"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">AÇIKLAMA</p>
												<h4 class="card-title text-success">
<?= $sonuc['odeme'];?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
</div>

<div class="row row-card-no-pd table-responsive mt-3">
<div class="col-sm-12 col-md-12">
 <table class="table table-hovered table-bordered table-head-bg-<?= $tema['tablorenk']?>">
   <thead>

<tr>
<th>
Ürün Adı
</th>
<th>
Miktar
</th>
<th>
Birim
</th>
<th>
Birim Fiyatı
</th>
<th>
Vergi Tutar
</th>
<th>
Toplam
</th>
</tr>
   </thead>
<?php $alfatbags = $baglanti->query("SELECT * FROM SatFatBag where bilgiid=".$sonuc["id"])->fetchAll();
                                                            foreach ($alfatbags as $alfatbag) {
                                                        ?> 
           <?php 
                                                      $fatura = $baglanti->query("SELECT * FROM SatisFaturasi where id=".$alfatbag["faturaid"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($fatura)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($fatura as $faturasi){
                                                            ?>
<tr>
<td>
<?php 
                                                      $urunlerim = $baglanti->query("SELECT * FROM Urunler where id=".$faturasi["urunadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($urunlerim)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($urunlerim as $urunum){
                                                            ?>
<?php echo $urunum['urunadi'] ?>
       <?php } ?> -  <?php 
                                                      $model = $baglanti->query("SELECT * FROM Modeller where id=".$urunum["modeli"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($model)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($model as $modeli){
                                                            ?>
                                                    
                                                     <?php echo $modeli['modeladi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?> - <?php $marka = $baglanti->query("SELECT * FROM Markalar where id=".$urunum["markasi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($marka)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($marka as $markasi){
                                                            ?>
                                                    
                                                     <?php echo $markasi['markaadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
         	
         <?php


                                                        }
                                                            
                                                    
                                                    ?>
</td>
<td>
<?= $faturasi['adet']?>
</td>
<td>
<?php 
                                                      $birim = $baglanti->query("SELECT * FROM Birim where id=".$urunum["birimadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($birim)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($birim as $birimi){
                                                            ?>
                                                    
                                                     <?php echo $birimi['kisaltma']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>
<td><?= number_format($faturasi['fiyat'], 2, ',', '.');?>
</td>
<td>
<?php
$vergi = $faturasi['kdvtutar']; + $faturasi['otvtutar'];
?>

	<?= number_format($vergi, 2, ',', '.');?>
</td>
<td>
<?= number_format($faturasi['kdvlitoplam'], 2, ',', '.');?>
</td>
</tr>
 <?php } ?> 
 <?php } ?> 
 <?php } ?> 
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
<td class="text-primary">
Ara Toplam
</td>
<td class="text-primary">
<?= number_format($sonuc['aratoplam'], 2, ',', '.');?>
</td>
</tr>
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
<td class="text-danger">
Kdv Toplam
</td>
<td class="text-danger">
<?= number_format($sonuc['kdvtoplam'], 2, ',', '.');?>
</td>
</tr>
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
<td class="text-success">
Genel Toplam
</td>
<td class="text-success">
<?= number_format($sonuc['geneltoplam'], 2, ',', '.');?>
</td>
</tr>
</table>
	</div>
	</div>
</div>





 <?php } ?> 
		
			
	
			
	


               