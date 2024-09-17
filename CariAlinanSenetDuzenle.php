<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Alınan Senet Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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


$sorgu = $baglanti->prepare("SELECT * FROM CekSenet Where id=:id");
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
									<h4 class="card-title">Senet Düzenle</h4>
								</div>
								<div class="card-body">
						<?php 
 if ($kbilgi["alinansenetduzenle"]==1) {?>
<form id="Duzenle" action="javascript:void(0);">
<div class="row">
<input type="text"  id="cid" hidden="hidden" name="unvan" value="<?= $sonuc["unvan"] ?>">
	<input type="text"  id="parabirimi" hidden="hidden" name="parabirimi" value="<?= $sonuc["parabirimi"] ?>">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
	<input type="hidden" class="form-control" name="id" value="<?php echo $sonuc["id"]; ?>">
<input type="text" id="ceksenet" class="form-control" placeholder="Senet" name="ceksenet" value="<?= $sonuc["ceksenet"] ?>" hidden="hidden">
	<input type="text" id="islem" class="form-control" placeholder="Verilen" name="islem" value="<?= $sonuc["islem"] ?>" hidden="hidden">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Senet Numarası</label>
 <input type="number" id="cekno" class="form-control" placeholder="Senet Numarası" name="ceknumarasi" value="<?= $sonuc["ceknumarasi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">İşlem Tarihi</label>
 <input type="text" id="islemtarihi" class="tarih form-control" placeholder="İşlem Tarihi" name="islemtarihi" value="<?= $sonuc["islemtarihi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                                    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Vade Tarihi</label>
 <input type="text" id="vadetarihi" class="tarih form-control" placeholder="Vade Tarihi" name="vadetarihi" value="<?= $sonuc["vadetarihi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
       <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Tutar</label>
 <input type="text" id="tutar" class="sayi form-control" placeholder="Tutar" name="tutar" value="<?= $sonuc["tutar"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->   
           <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Senet/Senet Türü</label>
            <select class="form-control custom-select" name="cekturu" data-placeholder="Senet Senet Türü Seçiniz" tabindex="1">
                                                       
     <option value="<?= $sonuc["cekturu"] ?>">
<?= $sonuc["cekturu"] ?></option>                                                   <option value="Müşteri Evrağı">
														Müşteri Evrağı</option>
                                                        <option value="Kendi Evrağımız">
														Kendi Evrağımız</option>
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                        
                              <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Durumu</label>
            <select class="form-control custom-select" name="durum" data-placeholder="Durum Seçiniz" tabindex="1">
  <option value="<?= $sonuc["durum"] ?>">
<?= $sonuc["durum"] ?></option>                                                      
                                                        <option value="Beklemede">
														Beklemede</option>
                                                        <option value="Cirolu">
														Cirolu</option>
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Açıklama</label>
                                        <textarea class="form-control" id="aciklama" rows="3" name="aciklama"><?= $sonuc["aciklama"] ?></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                                    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Banka Adı</label>
 <input type="text" id="bankaadi" class="form-control" placeholder="Banka Adı" name="bankaadi" value="<?= $sonuc["bankaadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                            <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Banka Şubesi</label>
 <input type="text" id="sube" class="form-control" placeholder="Banka Şubesi" name="bankasubesi" value="<?= $sonuc["bankasubesi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                             <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Hesap Numarası</label>
 <input type="number" id="hesapno" class="form-control" placeholder="Hesap Numarası" name="hesapnumarasi" value="<?= $sonuc["hesapnumarasi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                          










                          <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Evrak Türü</label>
            <select class="form-control custom-select" name="evrakturu" data-placeholder="Evrak Seçiniz" tabindex="1">
      <option value="<?= $sonuc["evrakturu"] ?>">
				<?= $sonuc["evrakturu"] ?></option>        
                                                        <option value="Asıl Evrak">
														Asıl Evrak</option>
                                                        <option value="Cirolu Evrak">
														Cirolu Evrak</option>
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
									
		<input type="hidden" class="form-control" name="alinansenetduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["alinansenetduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>										
									
									
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
                    url: "Islem/CariCekSenet.php", // POST işleminin olacağı sayfa
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
