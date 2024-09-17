<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Para Birimi Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Para Birimi Ekle</h4>
								</div>
								<div class="card-body">
									<?php 
 if ($kbilgi["parabirimiekle"]==1) {?>
<form id="Ekle" action="javascript:void(0);">

<div class="row">


                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Para Birimi</label>
 <input type="text" id="carigrupadi" class="form-control" placeholder="Para Birimi" name="parabirimadi">
                                                  </div>
                                            </div>
                                            <!--/span-->
 <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Kısaltma</label>
 <input type="text" id="kisaltma" class="form-control" placeholder="Kısaltma" name="kisaltma">
                                                  </div>
                                            </div>
                                            <!--/span-->
           <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Kur Seçiniz</label>
 <select class="form-control custom-select" data-placeholder="Kur Seçiniz" tabindex="1" name="kur">
<option value="TL">Türk Lirası</option>
<option value="dolar_satis">TCMB Dolar Satış=  <?= $DovizKurlari->dolar_satis; ?></option>
<option value="euro_satis">TCMB Euro Satış=  <?= $DovizKurlari->euro_satis; ?></option>
<option value="pound_satis">TCMB İngiliz Sterlini Satış=  <?= $DovizKurlari->pound_satis; ?></option>
<option value="ruble_satis">TCMB Ruble Satış=  <?= $DovizKurlari->ruble_satis; ?></option>
</select>
                         
                                                  </div>
                                            </div>
                                            <!--/span-->                                
                                        </div>
                                        <!--/row-->
      
									
<input type="hidden" class="form-control" name="paraekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
	
</form>
	<?php }?>
	<?php 
 if ($kbilgi["parabirimiekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>								
					</div>
			</div>
					
					
				</div>
			</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
			<div type="hidden" id="sonuc">

        </div>
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
                    url: "Islem/Para.php", // POST işleminin olacağı sayfa
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

