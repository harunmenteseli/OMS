<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Ayarlar - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<?php
 $sonuc= $baglanti->query("select * from Ayarlar")->fetch();
?>
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
									<h4 class="card-title">Site Ayarı Düzenle</h4>
								</div>
								<div class="card-body">
		<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>
<form id="Duzenle" action="javascript:void(0);">

<div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Adı</label>
 <input type="text" class="form-control" placeholder="Site Adı" name="siteadi" value="<?= $sonuc["siteadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Adresi</label>
 <input type="text" class="form-control" placeholder="Site Adresi" name="siteadresi" value="<?= $sonuc["siteadresi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Slogan</label>
 <input type="text" class="form-control" placeholder="Site Slogan" name="siteslogan" value="<?= $sonuc["siteslogan"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Mail</label>
 <input type="email" class="form-control" placeholder="Site Mail" name="sitemail" value="<?= $sonuc["sitemail"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site WhatsApp</label>
 <input type="text" class="form-control" placeholder="Site WhatsApp" name="sitewhatsapp" value="<?= $sonuc["sitewhatsapp"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Facebook</label>
 <input type="text" class="form-control" placeholder="Site Facebook" name="sitefacebook" value="<?= $sonuc["sitefacebook"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site Twitter</label>
 <input type="text" class="form-control" placeholder="Site Twitter" name="sitetwitter" value="<?= $sonuc["sitetwitter"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Site İnstagram</label>
 <input type="text" class="form-control" placeholder="Site İnstagram" name="siteinstagram" value="<?= $sonuc["siteinstagram"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
    
									
									<input type="hidden" class="form-control" name="ayarlarduzenle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
			<?php 
 if ($kbilgi["yetki"]<3) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>									
									
									
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
				}).then((Duzenleme) => {
					if (Duzenleme) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Ayarlar.php", // POST işleminin olacağı sayfa
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
