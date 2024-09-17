<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Cari Hesap Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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


$sorgu = $baglanti->prepare("SELECT * FROM Cariler Where id=:id");
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
									<h4 class="card-title"><?= $sonuc["unvani"] ?> Carisini Düzenle</h4>
								</div>
								<div class="card-body">
							<?php 
 if ($kbilgi["cariduzenle"]==1) {?>
<form id="Duzenle" action="javascript:void(0);">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cari</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">İletişim</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Diğer</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="row">
<input type="hidden" id="id" class="form-control" placeholder="id" name="id" value="<?= $sonuc["id"] ?>">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Fatura Ünvanı</label>
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
         <input type="hidden" id="cid" name="cid" class="form-control" placeholder="Fatura Ünvanı" readonly="readonly">  <input type="text" id="unvan" class="form-control" placeholder="Fatura Ünvanı" name="unvani" value="<?= $sonuc["unvani"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Yetkili Adı</label>
                                                    <input type="text" id="ad" class="form-control" placeholder="Yetkili Adı" name="yadi" value="<?= $sonuc["yadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Yetkili Soyadı</label>
                                                    <input type="text" id="soyad" class="form-control" placeholder="Yetkili Soyadı" name="ysoyadi" value="<?= $sonuc["ysoyadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergi Dairesi</label>
                                                    <input type="text" id="daire" class="form-control" placeholder="Veri Dairesi" name="dairesi" value="<?= $sonuc["dairesi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Vergi No veya TCKN</label>
                                                    <input type="number" id="vergino" class="form-control" placeholder="Vergi No veya TCKN" name="verginumarasi" value="<?= $sonuc["verginumarasi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->



										</div>
										<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
	
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Sabit Telefon</label>
                                                    <input type="text" id="tel" class="form-control" placeholder="Sabit Telefon" name="tel" value="<?= $sonuc["tel"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Cep Telefonu</label>
                                                    <input type="text" id="cep" class="form-control" placeholder="Cep Telefonu" name="cep" value="<?= $sonuc["cep"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Fax No</label>
                                                    <input type="text" id="fax" class="form-control" placeholder="Fax No" name="fax" value="<?= $sonuc["fax"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Mail Adresi</label>
                                                    <input type="text'" id="mail" class="form-control" placeholder="Mail Adresi" name="mail" value="<?= $sonuc["mail"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Adres</label>
           <textarea class="form-control" id="adres" rows="3" name="adres"><?= $sonuc["adres"] ?></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">İlçe</label>
                                                    <input type="text" id="ilce" class="form-control" placeholder="İlçe" name="ilce" value="<?= $sonuc["ilce"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">İl</label>
                                                    <input type="text" id="il" class="form-control" placeholder="İl" name="il" value="<?= $sonuc["il"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->




                  
										</div>
										<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Cari Tipi</label>
            <select class="form-control custom-select" data-placeholder="Cari Tipi Seçiniz" tabindex="1" name="caritipi" value="<?= $sonuc["caritipi"] ?>">
        
   <option value="<?= $sonuc['caritipi']?>"><?= $sonuc['caritipi']?></option>                                            
         <?php
			

						$sorguc = $baglanti->prepare('Select * from CariGruplar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorguc->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucc=$sorguc->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucc['id']?>"><?= $sonucc['carigrupadi']?></option>
                   <?php
						}  // While Bitiş

						?>
						           

                                                      
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Risk Limiti</label>
                                                    <input type="text" id="risk" class="form-control" placeholder="Risk Limiti" name="risklimiti" value="<?= $sonuc["risklimiti"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Para Birimi</label>
            <select class="form-control custom-select" data-placeholder="Para Birimini Seçiniz" tabindex="1" name="parabirimi">
                                                       
       <option value="<?= $sonuc['parabirimi']?>"><?= $sonuc['parabirimi']?></option>                                            
         <?php
			

						$sorgup = $baglanti->prepare('Select * from ParaBirimleri'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgup->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonucp=$sorgup->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonucp['id']?>"><?= $sonucp['parabirimadi']?></option>
                   <?php
						}  // While Bitiş

						?>                                                 
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Cari İskonto</label>
                                                    <input type="text" id="cariiskonto" class="form-control" placeholder="Cari İskonto" name="cariiskonto"value="<?= $sonuc["cariiskonto"] ?>" >
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->

<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Not</label>
                                        <textarea class="form-control" id="not" rows="5" placeholder="Not" name="nott"><?= $sonuc["nott"] ?></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
<input type="hidden" class="form-control" name="cariduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>


</form>
<?php }?>
	<?php 
 if ($kbilgi["cariduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>

				</div>
				
				</div>
				</div>
				</div>
				</div>
			</div>
			<div type="hidden" id="sonuc">
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
                    url: "Islem/Cari.php", // POST işleminin olacağı sayfa
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
