<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		 
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
	$sorgu = $baglanti->prepare("SELECT * FROM Cariler Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>
<div class="row row-card-no-pd">


			<div class="col-sm-6 col-md-12">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="fas fa-address-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FATURA ÜNVANI</p>
												<h4 class="card-title text-success"><?= $sonuc["unvani"] ?>
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
												<i class="fas fa-user"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">YETKİLİ</p>
												<h4 class="card-title text-warning">
<?= $sonuc["yadi"] ?> <?= $sonuc["ysoyadi"] ?>
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
												<i class="fas fa-archway"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">VERGİ DAİRESİ</p>
												<h4 class="card-title text-danger">
<?= $sonuc['dairesi']?>
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
												<p class="card-category">VERGİ NUMARASI</p>
												<h4 class="card-title text-primary">
<?= $sonuc["verginumarasi"] ?>
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
												<i class="fas fa-phone"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">SABİT TEL</p>
												<h4 class="card-title text-info">
<?= $sonuc["tel"] ?>
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
												<i class="fas fa-fax"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">FAX NUMARASI</p>
												<h4 class="card-title text-secondary">
<?= $sonuc["fax"] ?>
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
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="fas fa-mobile-alt"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">CEP TELEFONU</p>
												<h4 class="card-title text-success">
<?= $sonuc["cep"] ?>
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
												<i class="fas fa-envelope"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">MAİL ADRESİ</p>
												<h4 class="card-title text-warning">
<?= $sonuc["mail"] ?>
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
												<i class="fas fa-users"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">CARİ TİPİ</p>
												<h4 class="card-title text-danger">
<?php 
                                                      $caritipi = $baglanti->query("SELECT * FROM CariGruplar where id=".$sonuc["caritipi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($caritipi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($caritipi as $carigrup){
                                                            ?>
                                                    
                                                     <?php echo $carigrup['carigrupadi']; ?>
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
	<div class="col-sm-6 col-md-12">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="far fa-address-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ADRES</p>
												<h4 class="card-title text-primary">
<?= $sonuc["adres"] ?>
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
												<i class="far fa-address-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">İLÇE</p>
												<h4 class="card-title text-info">
<?= $sonuc["ilce"] ?>
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
												<i class="far fa-address-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">İL</p>
												<h4 class="card-title text-secondary">
<?= $sonuc["il"] ?>
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
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="fas fa-lira-sign"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">PARA BİRİMİ</p>
												<h4 class="card-title text-success">
<?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($parabirimi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($parabirimi as $parabirimim){
                                                            ?>
                                                    
                                                     <?php echo $parabirimim['parabirimadi']; ?>
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
												<i class="fas fa-chart-line"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">RİSK LİMİTİ</p>
												<h4 class="card-title text-warning">
<?= number_format($sonuc['risklimiti'], 2, ',', '.');?>
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
												<i class="fas fa-sort-amount-down"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">CARİ İSKONTO</p>
												<h4 class="card-title text-danger">
<?= $sonuc['cariiskonto'];?>
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
												<i class="fas fa-user-plus"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">EKLEYEN</p>
												<h4 class="card-title text-primary">
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
<div class="col-sm-6 col-md-6">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="far fa-sticky-note"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">NOT</p>
												<h4 class="card-title text-info">
<?= $sonuc['nott'];?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
	</div>






</div>




			
		





 <?php } ?> 
		
			
	
			
	


               