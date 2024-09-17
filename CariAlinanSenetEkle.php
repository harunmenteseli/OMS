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
	
	<title><?= $carim['unvani']?> - Alınan Çek Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title"><?= $carim['unvani']?> - Senet Ekle</h4>
								</div>
								<div class="card-body">
						<?php 
 if ($kbilgi["alinansenetekle"]==1) {?>
<form id="Ekle" action="javascript:void(0);">
<div class="row">
		<input type="text"  id="cid" hidden="hidden" name="unvan" value="<?= $carim['id']?>">
	<input type="text"  id="parabirimi" hidden="hidden" name="parabirimi" value="<?= $carim['parabirimi']?>">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
<input type="text" id="ceksenet" class="form-control" placeholder="Çek" name="ceksenet" value="senet" hidden="hidden">
	<input type="text" id="islem" class="form-control" placeholder="Alinan" name="islem" value="alinan" hidden="hidden">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Çek Numarası</label>
 <input type="number" id="cekno" class="form-control" name="ceknumarasi" value="<?= $rastgelesayi; ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">İşlem Tarihi</label>
 <input type="text" id="islemtarihi" class="tarih form-control" placeholder="İşlem Tarihi" name="islemtarihi" value="<?php echo date('Y-m-d H:i'); ?>" />
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                                    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Vade Tarihi</label>
 <input type="text" id="vadetarihi" class="tarih form-control" placeholder="Vade Tarihi" name="vadetarihi">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
       <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Tutar</label>
 <input type="text" id="tutar" class="sayi form-control" placeholder="Tutar" name="tutar">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->   
           <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
<label class="control-label">Çek/Senet Türü</label>
            <select class="form-control custom-select" name="cekturu" data-placeholder="Çek Senet Türü Seçiniz" tabindex="1">
                                                       
                                                        <option value="Müşteri Evrağı">
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
                                        <textarea class="form-control" id="aciklama" rows="3" name="aciklama"></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                                    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Banka Adı</label>
 <input type="text" id="bankaadi" class="form-control" placeholder="Banka Adı" name="bankaadi">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->  
                            <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Banka Şubesi</label>
 <input type="text" id="sube" class="form-control" placeholder="Banka Şubesi" name="bankasubesi">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->                             <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Hesap Numarası</label>
 <input type="number" id="hesapno" class="form-control" placeholder="Hesap Numarası" name="hesapnumarasi">
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
									<input type="hidden" class="form-control" name="alinansenetekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["alinansenetekle"]!=1) {?>
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
                    url: "Islem/CariCekSenet.php", // POST işleminin olacağı sayfa
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
