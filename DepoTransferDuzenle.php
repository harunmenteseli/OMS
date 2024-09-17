<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
		<?php


$transfer = $baglanti->prepare("SELECT * FROM DepoTransfer Where id=:id");
$transfer->execute(['id' => (int)$_GET["id"]]);
$transferim= $transfer->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Depo Transfer Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary">Depo Transfer</h4>
								</div>
								<div class="card-body ">
							<?php 
 if ($kbilgi["depotransferduzenle"]==1) {?>
<form id="Duzenle" action="javascript:void(0);">
		
                  <div class="row">
                                        <div class="col-md-12">
<input type="hidden" class="form-control" name="id" value="<?php echo $transferim["id"]; ?>">
                                                <div class="form-group">
                                
   <label class="control-label">Transfer Yapılacak Ürün</label>
   
   <div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text card-success" id="username-addon"  data-toggle="modal"
                    data-backdrop="false" data-target="#urunsecicipencere">Ürün Seç</span>
													</div>
<input type="text"  id="urunid" hidden="hidden" name="urun" value="<?= $transferim['urun']?>">

<input type="text" class="form-control" placeholder="Transfer Yapılacak Ürün" aria-label="Transfer Yapılacak Ürün" aria-describedby="username-addon" id="urunadi"  value="<?= $transferim['urun']?>">
												</div>
   
       </div>
                                            </div>
                                             <!--/span-->
                                           
                                           
                                        <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">İşlem Tarihi</label>
                                                    <input type="text" id="tarih" name="islemtarihi" class="tarih form-control" placeholder="İşlem Tarihi" value="<?php echo date('Y-m-d H:i'); ?>" />
                                                  </div>
                                            </div>
                                            <!--/span-->   
                                           
                               
                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
								 <div class="form-group">
                   
   <label class="control-label text-danger">Çıkış Yapılacak Depo</label>
                                                  
<select class="form-control custom-select text-danger" name="cikandepo" data-placeholder="Depo Seçiniz" tabindex="1">
<option value="<?= $transferim['cikandepo']?>"><?= $transferim['cikandepo']?></option>
                                     <?php
			

						$sorgud = $baglanti->prepare('Select * from Depolar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgud->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucd=$sorgud->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucd['id']?>"><?= $sonucd['depoadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                        
                                                    </select>
                                                        
                                                    </select>
                                                  </div>

									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 mb-1">
								 <div class="form-group">
                 
   <label class="control-label text-success">Giriş Yapılacak Depo</label>
                                                  
<select class="form-control custom-select text-success" name="girendepo" data-placeholder="Depo Seçiniz" tabindex="1">
<option value="<?= $transferim['girendepo']?>"><?= $transferim['girendepo']?></option>
                                     <?php
			

						$sorgud = $baglanti->prepare('Select * from Depolar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgud->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucd=$sorgud->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucd['id']?>"><?= $sonucd['depoadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                        
                                                    </select>
                                                        
                                                    </select>
                                                  </div>

									</div>
									
                     <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Transfer Miktarı</label>
 <input type="text" class="sayi form-control" placeholder="Transfer Miktarı" name="miktar" value="<?= $transferim['miktar']?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                  
                  
                  
				         </div>        
				
				<input type="hidden" class="form-control" name="transferduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["depotransferduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>						
					</div>
			</div>
					
					
				</div>
<div class="modal fade bd-example-modal-lg" id="urunsecicipencere" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">Ürün Seçici</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">
              <table class="tablo2 table table-head-bg-<?= $tema['tablorenk']?> table-hover table-responsive mt-3">
                                                        <thead>
                                                            <tr>
 <th hidden="hidden">cid</th>  
   <th>Ürün Resmi</th>                                               
                    <th>Ürün Kodu</th>
 <th>Ürün Adı</th>
<th>Model</th>
<th>Marka</th>
 <th>Kdvsiz Satış Fiyatı</th>
 <th>Kdv Oran</th>
 <th>Kdvli Satış Fiyatı</th>

                    
                
  </tr>
</thead>
        <tbody id="Kisilistesi">       
<?php
			

						$sorgu = $baglanti->prepare('Select * from Urunler'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgu->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>
 
<tr id="secilen" class="urunsecilen">
<td class="urunid" hidden="hidden"><?= $sonuc['id']?></td>
<td><img class="g100" src="<?= $sonuc['resmi']?>" alt="image profile"></td>
   <td class="urunkodu"><?= $sonuc['urunkodu']?></td>
                    <td class="urunadi"><?= $sonuc['urunadi']?></td>
 <td class="model">
 <?php 
                                                      $model = $baglanti->query("SELECT * FROM Modeller where id=".$sonuc["modeli"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($model)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($model as $modeli){
                                                            ?>
                                                    
                                                     <?php echo $modeli['modeladi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>       
 <td class="marka">
<?php $marka = $baglanti->query("SELECT * FROM Markalar where id=".$sonuc["markasi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
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

</td>       
<td class="kdvsizsatisfiyati text-primary"><?= $sonuc['kdvsizsatisfiyati']?></td>
 <td class="kdvorani text-warning"><?= $sonuc['kdvorani']?></td>     
 <td class="satisfiyati text-danger"><?= $sonuc['satisfiyati']?></td>


 
         
             </tr>


<?php
						}  // While Bitiş

						?>
						           
 



                                                        </tbody>
                                                    </table>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
							Kapat</button>
                       
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
            $('#Duzenle').submit(function(e) {
				swal({
					
					title: 'Emin misiniz?',
					text: "Eklemek istediğinize emin misiniz?",
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
                    url: "Islem/DepoTransfer.php", // POST işleminin olacağı sayfa
                    data: $("#Duzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Eklemekten vazgeçtiniz", {
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
</body>
</html>

	