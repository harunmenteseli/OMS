<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Alış Faturası - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Alış Faturası Ekle</h4>
								</div>
								<div class="card-body">
								<?php 
 if ($kbilgi["alisfaturaekle"]==1) {?>
	<form id="Ekle" action="javascript:void(0);">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Fatura Bilgi</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Fatura İçerik</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Kayıt</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
 
      <button type="button" class="btn btn-outline-success btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#kisiSeciciPencere">
                    CARİ SEÇ
                  </button>

                                           </div>
                                            </div>
                                            <!--/span-->
                                         

<div class="col-md-6">
                                                <div class="form-group text-center">
 
      <button type="button" class="btn btn-outline-primary btn-block btn-lg" onclick="window.location.href='CariEkle.php'">
                    YENİ CARİ EKLE
                  </button>
                                           </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

  <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Ünvanı</label>
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
         <input type="text" id="cid" name="cariadi" class="form-control text-danger" readonly="readonly" placeholder="Fatura Ünvanı" readonly="readonly" hidden="hidden"> 
<input type="text" id="parabirimi" name="parabirimi" class="form-control text-danger" readonly="readonly" placeholder="Fatura Ünvanı" readonly="readonly" hidden="hidden"> 
 <input type="text" id="unvan" class="form-control text-danger" readonly="readonly" placeholder="Fatura Ünvanı" readonly="readonly">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergi No veya TCKN</label>
                                                    <input type="number" id="tc" class="form-control text-danger" readonly="readonly" placeholder="Vergi No veya TCKN" readonly="readonly">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergi Dairesi</label>
                                                    <input type="text" id="daire" class="form-control text-danger" readonly="readonly" placeholder="Vergi Dairesi" readonly="readonly">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Adres</label>
                                                    <input type="text" id="adres" class="form-control text-danger" readonly="readonly" placeholder="Adres" readonly="readonly">
                                                  </div>
   </div>
                                            </div>
                                            <!--/span-->
                                           
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">İlçe</label>
                                                    <input type="text" id="ilce"class="form-control text-danger" readonly="readonly" placeholder="İlçe" readonly="readonly">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">İl</label>
                                                    <input type="text" id="il" class="form-control text-danger" readonly="readonly" placeholder="İl" readonly="readonly">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

 <div class="clearfix"></div>
                                    <hr>
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

<div class="modal fade bd-example-modal-lg" id="kisiSeciciPencere" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">Cari Seçici</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">
                    <table class="tablo2 display table table-striped table-hover table-head-bg-<?= $tema['tablorenk']?>">
                                                        <thead>
                                                            <tr>
 <th>#</th>              
                 <th hidden="hidden">parabirimi</th>                                
                    <th>Firma Adı</th>
 <th>Vergi No veya TCKN</th>
 <th>Vergi Dairesi</th>
 <th>Adres</th>
 <th>İlçe</th>
 <th>İl</th>
 <th>Cep Telefonu</th>                   
                
  </tr>
</thead>
        <tbody id="Kisilistesi">       
<?php
			

						$sorgu = $baglanti->prepare('Select * from Cariler'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgu->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>
 
<tr id="kisisecilen" class="kisisecilen">
<td class="cid"><?= $sonuc['id']?></td>
<td class="parabirimi"><?= $sonuc['parabirimi']?></td>
                    <td class="unvan"><?= $sonuc['unvani']?></td>
<td class="tc"><?= $sonuc['verginumarasi']?></td>
                    <td class="daire"><?= $sonuc['dairesi']?></td>

   <td class="adres"><?= $sonuc['adres']?></td>

 <td class="ilce"><?= $sonuc['ilce']?></td>
<td class="il"><?= $sonuc['il']?></td>
<td class="cep"><?= $sonuc['cep']?></td>
         
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
										<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
												<input type="text" class="form-control text-danger" readonly="readonly" id="aratoplam" name="aratoplam" placeholder="Ara Toplam">

											</div>
</div>
		
		<div class="col-md-4">
	<div class="form-group">
												<label for="kdvtoplam">Kdv Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="kdvtoplam" name="kdvtoplam" placeholder="Kdv Toplam">

											</div>
</div>

		<div class="col-md-4">
	<div class="form-group">
												<label for="geneltoplam">Genel Toplam</label>
												<input type="text" class="form-control text-danger" readonly="readonly" id="geneltoplam" name="geneltoplam" placeholder="Genel Toplam">

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
 
<tr class="Satirekle">
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
										<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
<div class="row">

									<div class="col-xl-12 col-lg-12 col-md-12 mb-1">
								 <div class="form-group">
                                <input name="odemetipi" id="odemetipi" type="text" value="alis" hidden="hidden" class="form-control" />
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
                                           
  
                                                                                           

<input type="hidden" class="form-control" name="alisekle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["alisfaturaekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>


           </div>
              
          
										</div>
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
                    url: "Islem/Alis.php", // POST işleminin olacağı sayfa
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
