<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Ürün Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Ürün Ekle</h4>
								</div>
								<div class="card-body">
									<?php 
 if ($kbilgi["stokekle"]==1) {?>							
	<form id="Ekle" action="javascript:void(0);">
<div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Ürün Adı</label>
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
 <input type="text" id="urunadi" class="form-control" placeholder="Ürün Adı" name="urunadi">
                                                  </div>
                                            </div>
                                            <!--/span-->
                 
                                           
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Ürün Kodu</label>
                                                    <input type="text" id="urunkodu" class="form-control" placeholder="Ürün Kodu" name="urunkodu" value="<?= $rastgelesayi; ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Ürün Barkodu</label>
                                                    <input type="text" id="urunbarkodu" class="form-control" placeholder="Barkod" name="urunbarkodu" value="<?= $rastgelebarkod; ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">KDV Oranı</label>
            <select class="form-control custom-select" id="kdvorani" data-placeholder="KDV Oranı Seçiniz" tabindex="1" name="kdvorani">
                                                       
        <?php
			

						$sorguk = $baglanti->prepare('Select * from Kdvler'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorguk->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuck=$sorguk->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonuck['kdvorani']?>"><?= $sonuck['kdvorani']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                                           
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergisiz Alış Fiyatı</label>
                                                    <input type="text" id="kdvsizalisfiyati" class="sayi form-control" placeholder="Vergisiz Alış Fiyatı" name="kdvsizalisfiyati">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergisiz Satış Fiyatı</label>
                                                    <input type="text" id="kdvsizsatisfiyati" class="sayi form-control" placeholder="Vergisiz Satış Fiyatı" name="kdvsizsatisfiyati">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergili Alış Fiyatı</label>
                                                    <input type="text" id="kdvlialisfiyati" class="sayi form-control" placeholder="Vergili Alış Fiyatı" name="alisfiyati">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergili Satış Fiyatı</label>
                                                    <input type="text" id="kdvlisatisfiyati" class="sayi form-control" placeholder="Vergili Satış Fiyatı" name="satisfiyati">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                                              <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Stok Grubu</label>
                                                     <select class="form-control custom-select" id="stokgrubu" data-placeholder="Stok Grubu Seçiniz" tabindex="1" name="stokgrubu">
                                                       
    <?php
			

						$sorgus = $baglanti->prepare('Select * from StokGruplar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgus->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucs=$sorgus->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucs['id']?>"><?= $sonucs['stokgrupadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                                                 
                               </select>
                                                  </div>
                                            </div>
                                            <!--/span-->                              


           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Birimi</label>
                                                     <select class="form-control custom-select" id="birimadi" data-placeholder="Birim Seçiniz" tabindex="1" name="birimadi">
                                                       
    <?php
			

						$sorgub = $baglanti->prepare('Select * from Birim'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgub->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucb=$sorgub->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucb['id']?>"><?= $sonucb['kisaltma']?> ---> <?= $sonucb['birimadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                                                 
                               </select>
                                                  </div>
                                            </div>
                                            <!--/span-->                                                   
                  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Marka</label>
            <select class="form-control custom-select" id="markalar" data-placeholder="Marka Seçiniz" tabindex="1" name="markasi">
           <option value="">Seçiniz</option>                                     
       <?php
			

						$sorgum = $baglanti->prepare('Select * from Markalar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgum->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucm=$sorgum->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucm['id']?>"  slug="<?= $sonucm['id']?>"><?= $sonucm['markaadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Model</label>
                                                     <select class="form-control custom-select" id="modeller" data-placeholder="Model Seçiniz" tabindex="1" name="modeli">
  <option value="">Seçiniz</option>                                                  
  <?php
			

						$sorgumo = $baglanti->prepare('Select * from Modeller'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgumo->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucmo=$sorgumo->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucmo['id']?>" marka-slug="<?= $sonucmo['markadi']?>"><?= $sonucmo['modeladi']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                                                   
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        
                                        
                                
<div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Ürün Resmi</label>
   
   <div id="resimyukleme" class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="username-addon"  data-toggle="modal" data-backdrop="false" data-target="#kisiSeciciPencere">Resim Yükle</span>
											</div>
				<input type="text" id="resmi" class="form-control" placeholder="Ürün Resmi" name="resmi">
												</div>
   
       </div>
                                            </div>
                                             <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Stok Uyarı Limiti</label>
                                                    <input type="text" id="uyarilimiti" class="sayi form-control" placeholder="Stok Uyarı Limiti" name="uyarilimiti">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
		<input type="hidden" class="form-control" name="urunekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
					</form>
									
	<?php }?>
	<?php 
 if ($kbilgi["stokekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>									
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
     	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<form id="ResimYukle" enctype="multipart/form-data">
					<div class="form-group">
						<label for="file">Yüklenecek Dosya</label>
						<input type="file" class="form-control card-success" name="file" id="file" required />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Upload</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>						
					</div>
			</div>
					
					
				</div>
			</div>
			
			<?php
require("Tablolar/alt.php"); //alt
?>
			
		</div>
		
	</div>
	<div type="hidden" id="sonuc">

        </div>
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
?>
	<script>
$('#ResimYukle').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: 'Islem/UrunResimYukle.php', // Verileri Post Ettiğimiz dosya adı
		type: 'POST', // Form Metodumuz
		data: new FormData(this), // Form ile gelen verilerimiz
		contentType: false,
		processData: false,

		success: function(data){
			// upload.php dosyamıza verilerin gönderildikten sonra işlem başarılı ise upload.php ile gelen sonuç değerini yazdıracağımız satır
			$('#resimyukleme').html(data);
$('#kisiSeciciPencere').modal().modal('hide');
		}
	});
});
  </script>
	<script>

        $(document).ready(function(){
            $('#Ekle').submit(function(e) {
e.preventDefault();
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
                    url: "Islem/Urun.php", // POST işleminin olacağı sayfa
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
	<script>
$( "#kdvsizalisfiyati, #kdvsizsatisfiyati, #kdvlialisfiyati, #kdvlisatisfiyati, #kdvorani" ).change(function() {
var kdvsizalis = parseFloat($("#kdvsizalisfiyati").val());
var kdvsizsatis = parseFloat($("#kdvsizsatisfiyati").val());
var kdvlialis = parseFloat($("#kdvlialisfiyati").val());
var kdvlisatis = parseFloat($("#kdvlisatisfiyati").val());
var kdv = parseFloat($("#kdvorani").val());
var aliskdvsi = parseFloat(kdvsizalis*kdv/100);
var satiskdvsi = parseFloat(kdvsizsatis*kdv/100);
$("#kdvlialisfiyati").val(kdvsizalis+aliskdvsi);
$("#kdvlisatisfiyati").val(kdvsizsatis+satiskdvsi);
});
</script>

</body>
</html>
