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
	
	<title><?= $carim['unvani']?> - Cari Alacaklandırma Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title"><?= $carim['unvani']?> - Cari Alacaklandırma</h4>
								</div>
								<div class="card-body">
		<form id="Ekle" action="javascript:void(0);">
		<input type="text"  id="cid" hidden="hidden" name="unvan" value="<?= $carim['id']?>">
<input type="text"  id="parabirimi" hidden="hidden" name="parabirimi" value="<?= $carim['parabirimi']?>"> 
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
<input type="text" id="evrakno" class="form-control" placeholder="Girdi" name="islem" value="alacak" hidden="hidden">							

    <div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">İşlem Tarihi</label>
 <input type="text" id="tarih" class="tarih form-control" placeholder="İşlem Tarihi" name="islemtarihi" value="<?php echo date('Y-m-d H:i'); ?>">
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
								
	<input type="hidden" class="form-control" name="cariislemekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
									</form>
									
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
                    url: "Islem/CCariIslem.php", // POST işleminin olacağı sayfa
                    data: $("#Ekle").serialize(), // Formdaki tüm verileri al
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
