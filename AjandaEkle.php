<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Yapılacak İş Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Yapılacak İş Ekle</h4>
								</div>
								<div class="card-body">
							
<form id="Ekle" action="javascript:void(0);">
<input class="form-control" type="hidden" readonly="readonly" value="<?= $kbilgi['id']?>" name="kid">
<div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Başlık</label>
 <input type="text" id="baslik" class="form-control" placeholder="Başlık" name="baslik" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
                  <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Yapılacak İş</label>
  <textarea class="form-control" id="adres" rows="5" name="icerik"></textarea> 
                                                  </div>
                                            </div>
                                            <!--/span-->

<div class="col-md-12">
<div class="form-group">
												<label class="form-label">Önem Rengi</label>
												<div class="row gutters-xs">
												<div class="col-auto">
														<label class="colorinput">
															<input type="radio" value="success" name="onem" class="colorinput-input" data-original-title="Önemsiz" data-toggle="tooltip">
															<span class="colorinput-color bg-success"></span>
														</label>
													</div>
	<div class="col-auto">
														<label class="colorinput">
															<input type="radio" value="primary" name="onem" class="colorinput-input" data-original-title="Az Önemli" data-toggle="tooltip">
															<span class="colorinput-color bg-primary"></span>
														</label>
													</div>
	<div class="col-auto">
														<label class="colorinput">
															<input type="radio" value="warning" name="onem" class="colorinput-input" data-original-title="Önemli" data-toggle="tooltip">
															<span class="colorinput-color bg-warning"></span>
														</label>
													</div>
	<div class="col-auto">
														<label class="colorinput">
															<input type="radio" value="danger" name="onem" class="colorinput-input" data-original-title="Çok Önemli" data-toggle="tooltip">
															<span class="colorinput-color bg-danger"></span>
														</label>
													</div>
					
											</div>

</div>
</div>
                <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Yapılacak Tarih</label>
<input class="form-control" type="hidden" readonly="readonly" value="<?php echo date('Y-m-d H:i'); ?>" name="islemtarihi">
 <input type="text" id="yapilacaktarih" class="tarih form-control" placeholder="Yapılacak Tarih" name="yapilacaktarih" value="">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                           
                                        </div>
                                        <!--/row-->
  
    
									
									
									<input type="hidden" class="form-control" name="ajandaekle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
</form>

									
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
                    url: "Islem/Ajanda.php", // POST işleminin olacağı sayfa
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
