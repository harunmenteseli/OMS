<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Ajandam - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">YAPILACAKLAR LİSTESİ</div>
								</div>
								<div class="card-body">
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='AjandaEkle.php'">
Yapılacak İş Ekle</button>
<br>
									<ol class="activity-feed">

		     <?php $ajanda = $baglanti->query("Select * from Ajanda where kid='$kbilgi[id]' order by yapilacaktarih desc")->fetchAll();
                                                         foreach ($ajanda as $ajandam) {
                                                        ?> 
										<li class="feed-item feed-item-<?= $ajandam['onem']?>">
											<time class="date text-danger" datetime="<?= $ajandam['yapilacaktarih']?>"><?= $ajandam['yapilacaktarih']?></time>
											<span class="text text-<?= $ajandam['onem']?>"><?= $ajandam['baslik']?></span><br>
<span class="text"><?= $ajandam['icerik']?></span>
<hr>
<div class="form-button-action">
<button type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='AjandaDuzenle.php?id=<?= $ajandam["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
		<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $ajandam["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
</div>
										</li>
									<?php }?>
									</ol>
								</div>
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
                    url: "Islem/Ajanda.php", // POST işleminin olacağı sayfa
                    data: 'ajandasil='+productId, // Formdaki tüm verileri al
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

	