<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Banka Giriş Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
	<?php


$sorgu = $baglanti->prepare("SELECT * FROM BankaGiris Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
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
									<h4 class="card-title">Banka Giriş Düzenle</h4>
								</div>
								<div class="card-body">
								<?php 
 if ($kbilgi["bankagirisduzenle"]==1) {?>								
	<form id="Duzenle" action="javascript:void(0);">
	
<div class="row">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
	<input type="hidden" class="form-control" name="id" value="<?php echo $sonuc["id"]; ?>">
<input type="text" id="evrakno" class="form-control" placeholder="Girdi" name="islem" value="<?= $sonuc["islem"] ?>" hidden="hidden">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Banka Seçiniz</label>
            <select class="form-control custom-select" name="bankaadi" data-placeholder="Banka Seçiniz" tabindex="1">
             <option value="<?= $sonuc["bankaadi"] ?>"><?= $sonuc['bankaadi']?></option>                                        
      <?php
			

						$sorgub = $baglanti->prepare('Select * from Bankalar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgub->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucb=$sorgub->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucb['id']?>"><?= $sonucb['bankaadi']?></option>
                   <?php
						}  // While Bitiş

						?>                                       
                                                   
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
             <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Ödeme Şekli Seçiniz</label>
            <select class="form-control custom-select" name="odemesekli" data-placeholder="Ödeme Şekli Seçiniz" tabindex="1">
     <option value="<?= $sonuc["odemesekli"] ?>"><?= $sonuc['odemesekli']?></option>                                                        
                                                        <option value="Havale">
	Havale</option>
	<option value="Havale">
	Kredi Kartı</option>
                                                    
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
                                           
                                                                   
                                     
    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">İşlem Tarihi</label>
 <input type="text" id="tarih" class="tarih form-control" placeholder="İşlem Tarihi" name="islemtarihi" value="<?= $sonuc['islemtarihi']?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                                                          
                  <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Ünvan</label>
   
   <div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="username-addon"  data-toggle="modal"
                    data-backdrop="false" data-target="#kisiSeciciPencere">Cari Seç</span>
													</div>
<input type="text"  id="cid" hidden="hidden" value="<?= $sonuc["unvan"] ?>" name="unvan">
<input type="text"  id="parabirimi" hidden="hidden" value="<?= $sonuc["parabirimi"] ?>" name="parabirimi">
<input type="text" class="form-control" placeholder="Ünvan" aria-label="Ünvan" aria-describedby="username-addon" id="unvan" value="<?= $sonuc["unvan"] ?>" required>
												</div>
   
       </div>
                                            </div>
                                             <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                     
            <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Evrak Numarası</label>
 <input type="text" id="evrakno" class="form-control" placeholder="Evrak Numarası" name="evraknumarasi" value="<?= $sonuc["evraknumarasi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                            
                                        
									      <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Açıklama</label>
                                        <textarea class="form-control" id="aciklama" rows="3" name="aciklama"><?= $sonuc['aciklama']?></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->          
		
           <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Tutar</label>
 <input type="text" id="tutar" class="sayi form-control" placeholder="Tutar" value="<?= $sonuc["tutar"] ?>" name="tutar">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                             
                                        
	<input type="hidden" class="form-control" name="bankagirisduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["bankagirisduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>									
					</div>
			</div>
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
                    <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover mt-3">
                                                        <thead>
                                                            <tr>
 <th hidden="hidden">cid</th>      
         <th hidden="hidden">parabirimi</th>                                        
                    <th>Firma Adı</th>
 <th>Vergi No veya TCKN</th>
 <th>Vergi Dairesi</th>
 <th>Adres</th>
 <th>İlçe</th>
 <th>İl</th>
                    
                
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
<td class="cid" hidden="hidden"><?= $sonuc['id']?></td>
<td class="parabirimi" hidden="hidden"><?= $sonuc['parabirimi']?></td>
                    <td class="unvan"><?= $sonuc['unvani']?></td>
<td class="tc"><?= $sonuc['verginumarasi']?></td>
                    <td class="daire"><?= $sonuc['dairesi']?></td>

   <td class="adres"><?= $sonuc['adres']?></td>

 <td class="ilce"><?= $sonuc['ilce']?></td>
<td class="il"><?= $sonuc['il']?></td>
         
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
			</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
			
		</div>
		
	</div>
	<div type="hidden" id="sonuc">
			</div>
	<?php
require("Tablolar/js.php"); //alt
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
				}).then((Duzenleme) => {
					if (Duzenleme) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Banka.php", // POST işleminin olacağı sayfa
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
