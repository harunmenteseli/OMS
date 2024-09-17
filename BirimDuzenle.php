<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	<?php


$sorgu = $baglanti->prepare("SELECT * FROM Birim Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $sonuc["birimadi"] ?> Birimini Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title"><?= $sonuc["birimadi"] ?> Birimini Düzenle</h4>
								</div>
								<div class="card-body">
						<?php 
 if ($kbilgi["birimduzenle"]==1) {?>
<form id="Duzenle" action="javascript:void(0);">

<div class="row">
<input type="hidden" class="form-control" name="id" value="<?php echo $sonuc["id"]; ?>">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Birim Adı</label>
 <input type="text" id="birimadi" class="form-control" placeholder="Birim Adı" name="birimadi" value="<?= $sonuc["birimadi"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
    <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Birim Kısaltması</label>
 <input type="text" id="kisaltma" class="form-control" placeholder="Kısaltma" name="kisaltma" value="<?= $sonuc["kisaltma"] ?>">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
    
									
									
									<input type="hidden" class="form-control" name="birimduzenle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>
<?php }?>
	<?php 
 if ($kbilgi["birimduzenle"]!=1) {?>
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
                    url: "Islem/Birim.php", // POST işleminin olacağı sayfa
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
