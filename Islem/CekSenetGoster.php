<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
require("../Tablolar/tasarim.php"); 
?>
<?php
		 
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
	$sorgu = $baglanti->prepare("SELECT * FROM CekSenet Where id=:id");
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
												<i class="far fa-user"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">CARİ ADI</p>
												<h4 class="card-title text-success">
													<?php 
                                                      $cari = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["unvan"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cari)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($cari as $carisi){
                                                            ?>
                                                    
                                                     <?php echo $carisi['unvani']; ?>
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
												<i class="fas fa-list-ol"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">EVRAK NO</p>
												<h4 class="card-title text-warning">
					  <?= $sonuc['ceknumarasi']; ?>                     
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
												<i class="far fa-file-archive"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">EVRAK TİPİ</p>
												<h4 class="card-title text-danger">
					       <?= $sonuc['evrakturu']?>
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
												<i class="fas fa-file-invoice"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">EVRAK TÜRÜ</p>
												<h4 class="card-title text-info">
					       <?= $sonuc['cekturu']?>
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
												<i class="far fa-file-alt"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">DURUMU</p>
												<h4 class="card-title text-primary">
					       <?= $sonuc['durum']?>
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
												<i class="far fa-calendar-alt"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">İŞLEM TARİHİ</p>
												<h4 class="card-title text-secondary">
					       <?= $sonuc['islemtarihi']?>
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
												<i class="far fa-calendar-check"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">VADE TARİHİ</p>
												<h4 class="card-title text-success">
					       <?= $sonuc['vadetarihi']?>
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
												<i class="fas fa-building"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">BANKA ADI</p>
												<h4 class="card-title text-warning">
					       <?= $sonuc['bankaadi'];?>
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
												<i class="fas fa-chalkboard-teacher"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">BANKA ŞUBESİ</p>
												<h4 class="card-title text-danger">
					       <?= $sonuc['bankasubesi'];?>
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
												<i class="fas fa-credit-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">HESAP NO</p>
												<h4 class="card-title text-info">
					       <?= $sonuc['hesapnumarasi'];?>
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
												<i class="fas fa-lira-sign"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">TUTAR</p>
												<h4 class="card-title text-primary">
					       <?= number_format($sonuc['tutar'], 2, ',', '.');?>
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
<div class="col-sm-6 col-md-12">

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
					       <?= $sonuc['aciklama'];?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>



</div>




			
		





 <?php } ?> 
		
			
	
			
	


               