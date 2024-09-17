<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	<?php


$sorgu = $baglanti->prepare("SELECT * FROM Personeller Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $sonuc["ad"] ?> <?= $sonuc["soyad"] ?> Personelini Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary"><?= $sonuc["ad"] ?> <?= $sonuc["soyad"] ?> Personelini Düzenle</h4>
								</div>
								<div class="card-body ">
<?php 
 if ($kbilgi["cariekle"]==1) {?>
	<form id="Duzenle" action="javascript:void(0);">
<input type="hidden" id="id" class="form-control" placeholder="id" name="id" value="<?= $sonuc["id"] ?>">
<div class="row">
 <div class="col-md-4">
 <div class="form-group">
   <input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">                             
   <label class="control-label">AD</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="AD" name="ad" value="<?= $sonuc["ad"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">SOYAD</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="SOYAD" name="soyad" value="<?= $sonuc["soyad"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">KİMLİK NUMARASI</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="KİMLİK NUMARASI" name="tckn" value="<?= $sonuc["tckn"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">İŞE GİRİŞ TARİHİ</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="İŞE GİRİŞ TARİHİ" name="isegiristarihi" value="<?= $sonuc["isegiristarihi"] ?>">
                                                  </div>
</div>
<div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">DOĞUM TARİHİ</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="DOĞUM TARİHİ" name="dogumtarihi" value="<?= $sonuc["dogumtarihi"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">DOĞUM YERİ</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="DOĞUM YERİ" name="dogumyeri" value="<?= $sonuc["dogumyeri"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">MAAŞ</label>
                                                    <input type="text" id="ad" class="form-control text-success sayi" placeholder="MAAŞ" name="maas" value="<?= $sonuc["maas"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">ASGARİ GEÇİM İNDİRİMİ</label>
                                                    <input type="text" id="ad" class="form-control text-success sayi" placeholder="ASGARİ GEÇİM İNDİRİMİ" name="agi" value="<?= $sonuc["agi"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">MESAİ SAAT ÜCRETİ</label>
                                                    <input type="text" id="ad" class="form-control text-success sayi" placeholder="MESAİ SAAT ÜCRETİ" name="mesaiucret" value="<?= $sonuc["mesaiucret"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">YILLIK İZİN</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="YILLIK İZİN" name="yillikizinsayisi" value="<?= $sonuc["yillikizinsayisi"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">GÖREVİ</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="GÖREVİ" name="gorevi" value="<?= $sonuc["gorevi"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">TELEFON NUMARASI</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="TELEON NUMARASI" name="tel" value="<?= $sonuc["tel"] ?>">
                                                  </div>
</div>
 
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">MEDENİ DURUMU</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="MEDENİ DURUMU" name="medenidurumu" value="<?= $sonuc["medenidurumu"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">ÇOCUK SAYISI</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="ÇOCUK SAYISI" name="cocuksayisi" value="<?= $sonuc["cocuksayisi"] ?>">
                                                  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
                                
   <label class="control-label">ASKERLİK DURUMU</label>
                                                    <input type="text" id="ad" class="form-control text-success" placeholder="ASKERLİK DURUMU" name="askerlik" value="<?= $sonuc["askerlik"] ?>">
                                                  </div>
</div>

<div class="col-md-12">
 <div class="form-group">
                                
   <label class="control-label">İKAMET ADRESİ</label>
 <textarea class="form-control text-success" id="adres" rows="3" name="ikamet"><?= $sonuc["ikamet"] ?></textarea>            
                                                  </div>
</div>
<input type="hidden" class="form-control" name="personelduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["cariekle"]!=1) {?>
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
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
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

	