<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $kbilgi["ad"] ?> <?= $kbilgi["soyad"] ?> Kulanıcısı Düzenle- <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title"><?= $kbilgi["ad"] ?> <?= $kbilgi["soyad"] ?> Kullanıcısı Düzenle</h4>
								</div>
								<div class="card-body">
<form id="Duzenle" action="javascript:void(0);">

<div class="row">
<input type="hidden" class="form-control" name="id" value="<?= $kbilgi["id"] ?>">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Adı</label>
 <input type="text" class="form-control" placeholder="Ad" name="ad" value="<?= $kbilgi["ad"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Soyadı</label>
 <input type="text" class="form-control" placeholder="Soyad" name="soyad" value="<?= $kbilgi["soyad"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
  <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Kullanıcı Adı</label>
 <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullaniciadi" value="<?= $kbilgi["kullaniciadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->

  <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Kullanıcı Şifre</label>
  <input type="text" class="form-control" placeholder="Şifre" name="sifre" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->

   <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Mail Adresi</label>
 <input type="text" class="form-control" placeholder="Mail Adresi" name="mail" value="<?= $kbilgi["mail"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
 <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Gizli Soru</label>
 <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="gizlisoru" value="<?= $kbilgi["gizlisoru"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
 <div class="col-md-6">
                                                <div class="form-group">
                                
   <label class="control-label">Gizli Cevap</label>
 <input type="text" class="form-control" placeholder="Gizli Cevap" name="gizlicevap" value="<?= $kbilgi["gizlicevap"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
 <div class="col-md-2">
                                                <div class="form-group">
                                
   <label class="control-label">Yetki</label>
 <?php 
 if ($kbilgi["yetki"]==1) {?>
									<h4 class="user-level text-info">Muhasebe</h4>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==2) {?>
									<h4 class="user-level text-primary">Muhasebe Müdürü</h4>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==3) {?>
									<h4 class="user-level text-success">Genel Müdür</h4>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==4) {?>
									<h4 class="user-level text-danger">Patron</h4>
<?php }?>
                                                  </div>
                                            </div>
                                            <!--/span-->
  
  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label"></label>
 								<input type="hidden" class="form-control" name="kullaniciduzenle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Güncelle</button>
                                                  </div>
                                            </div>
                                            <!--/span-->

    
									
									
		
</form>
									
									
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
				}).then((Duzenleme) => {
					if (Duzenleme) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Profil.php", // POST işleminin olacağı sayfa
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

	