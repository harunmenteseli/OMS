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
	
	<title>Satış Faturası - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title"><?= $carim['unvani']?> - Satış Faturası Ekle</h4>
								</div>
								<div class="card-body">
								<?php 
 if ($kbilgi["satisfaturaekle"]==1) {?>
	<form id="Ekle" action="javascript:void(0);">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
         <input type="text" id="cid" name="cariadi" class="form-control" placeholder="Fatura Ünvanı" readonly="readonly"value="<?= $carim["id"] ?>" hidden="hidden">  
<input type="text" id="parabirimi" name="parabirimi" class="form-control" placeholder="Fatura Ünvanı" readonly="readonly"value="<?= $carim["parabirimi"] ?>" hidden="hidden">  
									




<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Tarihi</label>
                                                    <input type="text" id="tarih" name="faturatarihi" class="tarih form-control" placeholder="Fatura Tarihi" value="<?php echo date('Y-m-d H:i'); ?>" />
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Seri</label>
                                                    <input type="text" id="faturaseri" name="faturaseri" class="form-control" placeholder="Fatura Seri" value="<?= $rastgeleharf; ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
<div class="col-md-4">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura No</label>
                                                    <input type="number" id="faturanumara" name="faturanumarasi" class="form-control" placeholder="Fatura No" value="<?= $rastgelesayi; ?>">
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
    
                                                      </tbody>

                         
                        </table>
			</div>
		<div class="col-md-4">
	<div class="form-group">
												<label for="aratoplam">Ara Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="aratoplam" name="aratoplam" placeholder="Ara Toplam" readonly="readonly">

											</div>
</div>
		
		<div class="col-md-4">
	<div class="form-group">
												<label for="kdvtoplam">Kdv Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="kdvtoplam" name="kdvtoplam" placeholder="Kdv Toplam" readonly="readonly">

											</div>
</div>

		<div class="col-md-4">
	<div class="form-group">
												<label for="geneltoplam">Genel Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="geneltoplam" name="geneltoplam" placeholder="Genel Toplam" readonly="readonly">

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
                  
                  
								
<div class="row">

									<div class="col-xl-12 col-lg-12 col-md-12 mb-1">
								 <div class="form-group">
                                <input name="odemetipi" id="odemetipi" type="text" value="satis" hidden="hidden" class="form-control" />
   <label class="control-label">Depo Seçiniz</label>
                                                  
<select class="form-control custom-select" name="depo" data-placeholder="Depo Seçiniz" tabindex="1">
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
                                
   <label class="control-label">Açıklama</label>
      <textarea class="form-control" id="aciklama" rows="3" name="odeme"></textarea> 
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
  
                                                                                           

<input type="hidden" class="form-control" name="satisekle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["satisfaturaekle"]!=1) {?>
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
            $('#Ekle').submit(function(e) {
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
                    url: "Islem/CariSatis.php", // POST işleminin olacağı sayfa
                    data: $("#Ekle").serialize(), // Formdaki tüm verileri al
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
