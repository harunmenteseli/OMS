<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Kullanıcılar - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
							<?php 
 if ($kbilgi["yetki"]==4) {?>
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='KullaniciEkle.php'">
Kullanıcı Ekle</button>
<br>
<?php $sorgu = $baglanti->prepare('Select * from Kullanicilar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>

<div class="row row-card-no-pd">
						<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
										
											<div class="numbers">
												<p class="card-category text-success">ADI</p>

											<h2 class="card-title text-warning"><?= $sonuc["ad"] ?></h2>

											</div>
									
								</div>
							</div>
						</div>
<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
									
											<div class="numbers">
												<p class="card-category text-success">SOYADI</p>

											<h2 class="card-title text-warning"><?= $sonuc["soyad"] ?></h2>

											</div>
								
								</div>
							</div>
						</div>
<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
									
											<div class="numbers">
												<p class="card-category text-success">KULLANICI ADI</p>

											<h2 class="card-title text-warning"><?= $sonuc["kullaniciadi"] ?></h2>

											</div>
								
								</div>
							</div>
						</div>
<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
								
											<div class="numbers">
												<p class="card-category text-success">ŞİFRE</p>

											<h2 class="card-title text-warning"><?= $sonuc["sifre"] ?></h2>

											</div>
								
								</div>
							</div>
						</div>
<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
										
											<div class="numbers">
												<p class="card-category text-success">GÖREVİ</p>

							
<?php 
 if ($sonuc["yetki"]==1) {?>
									<h2 class="text-info">Muhasebe</h2>
<?php }?>
<?php 
 if ($sonuc["yetki"]==2) {?>
									<h2 class="text-primary">Muhasebe Müdürü</h2>
<?php }?>
<?php 
 if ($sonuc["yetki"]==3) {?>
									<h2 class="text-success">Genel Müdür</h2>
<?php }?>
<?php 
 if ($sonuc["yetki"]==4) {?>
									<h2 class="text-danger">Patron</h2>
<?php }?>

											</div>
								
								</div>
							</div>
						</div>
<div class="col-sm-4 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									
								
										
											<div class="numbers">
												<p class="card-category text-success">İŞLEM</p>

												<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="Yetkilendirme" class="btn btn-icon btn-round btn-secondary" data-original-title="Yetkilendirme" onclick="window.location.href='KullaniciYetki.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-search"></i>
															</button>
														
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='KullaniciDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>

<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>

														</div>

											</div>
								
								</div>
							</div>
						</div>
	




</div>
 <?php }?>     



	<?php }?>
	<?php 
 if ($kbilgi["yetki"]<3) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>								
		


	

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
            $(document).on('click', '#sil', function(e){
           var productId = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
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
                    url: "Islem/Kullanici.php", // POST işleminin olacağı sayfa
                    data: 'kullanicisil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
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

	