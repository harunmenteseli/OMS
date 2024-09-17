<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		 
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);

	$sorgu = $baglanti->prepare("SELECT id FROM BankaGiris Where id=:id UNION ALL SELECT id KasaGiris where id=:id");
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




</div>




			
		





 <?php } ?> 
		
			
	
			
	


               