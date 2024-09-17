<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Satış Faturası Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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

$sorgu = $baglanti->prepare("SELECT * FROM SatFatBilgi Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<?php
require("Tablolar/sol.php"); //sol menü
?>
		

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
			
					
				
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><?php 
                                                      $cariler = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["cariadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cariler)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($cariler as $cari){
                                                            ?>
<?php echo $cari['unvani']; ?> <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?> Satış Faturasını Düzenle</h4>
								</div>
								<div class="card-body">
							<?php 
 if ($kbilgi["satisfaturaduzenle"]==1) {?>
	<form id="Duzenle" action="javascript:void(0);">
									




<input type="hidden" class="form-control" name="id" value="<?php echo $sonuc["id"]; ?>">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
         <input type="text" id="cid" name="cariadi" class="form-control" placeholder="Fatura Ünvanı" readonly="readonly" hidden="hidden" value="<?php echo $sonuc['cariadi']; ?>">
 <input type="text" id="parabirimi" name="parabirimi" class="form-control" placeholder="Fatura Ünvanı" readonly="readonly" hidden="hidden" value="<?php echo $sonuc['parabirimi']; ?>">

    





<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Tarihi</label>
                                                    <input type="text" id="tarih" name="faturatarihi" class="tarih form-control" placeholder="Fatura Tarihi" value="<?= $sonuc["faturatarihi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Seri</label>
                                                    <input type="text" id="faturaseri" name="faturaseri" class="form-control" placeholder="Fatura Seri" value="<?= $sonuc["faturaseri"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
<div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura No</label>
                                                    <input type="number" id="faturanumara" name="faturanumarasi" class="form-control" placeholder="Fatura No" value="<?= $sonuc["faturanumarasi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                          




						
										
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#SeciciPencere">
                    Ürün Seç
                  </button>
            
			</div>
		


                  
		<div class="col-md-12">
			<table id="Tablom" class="table table-responsive table-head-bg-<?= $tema['tablorenk']?> table-bordered table-hovered" width="100%">
                            <thead>
                            <tr>
                                <th><strong>Ürün Adı</strong></th>
                                <th>Adet</th>
                                <th>Fiyat</th>
                                <th>Kdvsiz Toplam</th>
                                <th>Kdv Oran</th>
                                <th>Kdv Tutar</th>
                                <th>Kdvli Toplam</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                                                                  
                            <tbody>
<?php                                                                                                               $alfatbags = $baglanti->query("
                                                                                SELECT * FROM SatFatBag where bilgiid=".$sonuc["id"])->fetchAll();
                                                            foreach ($alfatbags as $alfatbag) {
                                                        ?> 
                                                        	
                                                        <?php 
                                                      $fatura = $baglanti->query("SELECT * FROM SatisFaturasi where id=".$alfatbag["faturaid"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($fatura)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($fatura as $faturasi){
                                                            ?>
                            	<tr class="satir"><td><input id="urunadi_' + sayac + '" name="urunadi[]' + '" value="<?php echo $faturasi['urunadi'] ?>" type="hidden"> <span id="urun_' + sayac + '">
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
</span></td>
<td><input id="adet_' + sayac + '" name="adet[]' + '" type="text" class="adet hesaplama form-control" value="<?php echo $faturasi['adet'] ?>"/></td>
<td><input id="fiyat_' + sayac + '" name="fiyat[]' + '" type="text" value="<?php echo $faturasi['fiyat'] ?>" class="fiyat hesaplama form-control" /></td>
<td><input id="kdvsiztoplam_' + sayac + '" name="kdvsiztoplam[]' + '" type="text" value="<?php echo $faturasi['kdvsiztoplam'] ?>" class="kdvsiztoplam hesaplama form-control"/></td>
<td><input id="kdvoran_' + sayac + '" name="kdvoran[]' + '" type="text" value="<?php echo $faturasi['kdvoran'] ?>" class="kdvoran hesaplama form-control"/></td>
<td><input id="kdvtutar_' + sayac + '" name="kdvtutar[]' + '" type="text" value="<?php echo $faturasi['kdvtutar'] ?>" class="kdvtutar hesaplama form-control"/></td>
<td><input id="kdvlitoplam_' + sayac + '" name="kdvlitoplam[]' + '" type="text" value="<?php echo $faturasi['kdvlitoplam'] ?>" class="kdvlitutar hesaplama form-control"/></td>
<td><button type="button" data-toggle="tooltip" class="sil btn btn-icon btn-round btn-danger"><i class="fa fa-times"></i></button></td></tr>
         <?php } ?>
         	
         <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
                                                      </tbody>

                         
                        </table>
			</div>
		<div class="col-md-4">
	<div class="form-group">
												<label for="aratoplam">Ara Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="aratoplam" name="aratoplam" placeholder="Ara Toplam" readonly="readonly" value="<?= $sonuc["aratoplam"] ?>">

											</div>
</div>
		
		<div class="col-md-4">
	<div class="form-group">
												<label for="kdvtoplam">Kdv Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="kdvtoplam" name="kdvtoplam" placeholder="Kdv Toplam" readonly="readonly" value="<?= $sonuc["kdvtoplam"] ?>">

											</div>
</div>

		<div class="col-md-4">
	<div class="form-group">
												<label for="geneltoplam">Genel Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="geneltoplam" name="geneltoplam" placeholder="Genel Toplam" readonly="readonly" value="<?= $sonuc["geneltoplam"] ?>">

											</div>
</div>
		
		</div>
<div class="modal fade bd-example-modal-lg" id="SeciciPencere" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
 
<tr id="secilen" class="Satirekle">
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
                  
                  
										
   <?php


$sorgu = $baglanti->prepare("SELECT * FROM SatFatBilgi Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 mb-1">
								 <div class="form-group">
                        <input name="odemetipi" id="odemetipi" type="text" value="<?= $sonuc["odemetipi"] ?>" hidden="hidden" class="form-control" />              
   <label class="control-label">Depo Seçiniz</label>
                                                  
<select class="form-control custom-select" name="depo" data-placeholder="Depo Seçiniz" tabindex="1">
                                           <option selected value="<?= $sonuc["depo"] ?>"><?= $sonuc["depo"] ?></option>            
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
                                                  </div>

									</div>

             <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                             <div class="form-group">
                                
   <label class="control-label">Açıklama</label>
 <textarea class="form-control" id="aciklama" rows="3" name="odeme"><?= $sonuc['odeme']?></textarea>
                                                  </div>
                                            </div>
                                            <!--/span-->


<input type="hidden" class="form-control" name="satisduzenle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["satisfaturaduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>


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
					text: "Düzenlemek istediğinize emin misiniz?",
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
                    url: "Islem/CariSatis.php", // POST işleminin olacağı sayfa
                    data: $("#Duzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Düzenlemekten vazgeçtiniz", {
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
