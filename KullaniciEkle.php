<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Kulanıcı Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Kullanıcı Ekle</h4>
								</div>
								<div class="card-body">
							<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>
<form id="Ekle" action="javascript:void(0);">

<div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Adı</label>
 <input type="text" class="form-control" placeholder="Ad" name="ad" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Soyadı</label>
 <input type="text" class="form-control" placeholder="Soyad" name="soyad" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Kullanıcı Adı</label>
 <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullaniciadi" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Kullanıcı Şifre</label>
 <input type="text" class="form-control" placeholder="Şifre" name="sifre" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Görevi</label>
            <select class="form-control custom-select" data-placeholder="Görev Seçiniz" tabindex="1" name="yetki">
                                             
 <option value="1">MUHASEBE</option>
 <option value="2">MUHASEBE MÜDÜRÜ</option>
 <option value="3">GENEL MÜDÜR</option>
 <option value="4">PATRON</option>
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label"></label>
 								<input type="hidden" class="form-control" name="kullaniciekle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                                  </div>
                                            </div>
                                            <!--/span-->

    
									
									
		
</form>
	<?php }?>
	<?php 
 if ($kbilgi["yetki"]<3 ) {?>
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
                    url: "Islem/Kullanici.php", // POST işleminin olacağı sayfa
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

	