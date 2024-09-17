<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		 
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
	$sorgu = $baglanti->prepare("SELECT * FROM Personeller Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>
<div class="row row-card-no-pd">


			<div class="col-sm-6 col-md-6">

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
												<p class="card-category">AD SOYAD</p>
												<h4 class="card-title text-success"><?= $sonuc["ad"] ?> <?= $sonuc["soyad"] ?>
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
												<i class="fas fa-list-ol"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">KİMLİK NUMARASI</p>
												<h4 class="card-title text-warning">
<?= $sonuc["tckn"] ?>
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
												<i class="fas fa-calendar"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">İŞE GİRİŞ TARİHİ</p>
												<h4 class="card-title text-danger">
<?= $sonuc['isegiristarihi']?>
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
												<i class="fas fa-calendar-alt"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">DOĞUM TARİHİ</p>
												<h4 class="card-title text-primary">
<?= $sonuc["dogumtarihi"] ?>
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
												<i class="fas fa-location-arrow"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">DOĞUM YERİ</p>
												<h4 class="card-title text-info">
<?= $sonuc["dogumyeri"] ?>
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
												<i class="fas fa-lira-sign"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">MAAŞ</p>
												<h4 class="card-title text-secondary">
<?= number_format($sonuc['maas'], 2, ',', '.');?>
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
												<i class="fas fa-level-down-alt"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ASGARİ GEÇİM İNDRİMİ</p>
												<h4 class="card-title text-success">
<?= number_format($sonuc['agi'], 2, ',', '.');?>
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
												<i class="fas fa-user-clock"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">MESAİ SAAT ÜCRETİ</p>
												<h4 class="card-title text-warning">
<?= number_format($sonuc['mesaiucret'], 2, ',', '.');?>
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
												<i class="fas fa-user-check"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">YILLIK İZİN</p>
												<h4 class="card-title text-danger">
<?= $sonuc["yillikizinsayisi"] ?>
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
												<i class="fas fa-user-tie"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">GÖREVİ</p>
												<h4 class="card-title text-primary">
<?= $sonuc["gorevi"] ?>
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
												<p class="card-category">TELEFON NUMARASI</p>
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
												<i class="far fa-address-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">MEDENİ DURUMU</p>
												<h4 class="card-title text-secondary">
<?= $sonuc["medenidurumu"] ?>
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
												<i class="fas fa-users"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ÇOCUK SAYISI</p>
												<h4 class="card-title text-success">
<?= $sonuc["cocuksayisi"] ?>
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
												<i class="fas fa-award"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ASKERLİK DURUMU</p>
												<h4 class="card-title text-warning">
<?= $sonuc["askerlik"] ?>
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
												<p class="card-category">İKAMET ADRESİ</p>
												<h4 class="card-title text-info">
<?= $sonuc['ikamet'];?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
	</div>






</div>




			
		





 <?php } ?> 
		
			
	
			
	


               