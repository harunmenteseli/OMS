<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Mesaj Ekle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title">Mesaj Gönder</h4>
								</div>
								<div class="card-body">

<form id="Ekle" action="javascript:void(0);">

<div class="row">
 <div class="col-md-12">
                                                <div class="form-group">
  <input type="text" name="kimden" class="form-control" placeholder="Kimden" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">
  <input type="text" name="okunma" class="form-control" placeholder="Okunma" readonly="readonly" value="0" hidden="hidden">      
  <input type="text" name="mesajtarihi" class="form-control" placeholder="Mesaj Tarihi" readonly="readonly" value="<?php echo date('Y-m-d H:i'); ?>" hidden="hidden">                             
   <label class="control-label">Kime Mesaj Göndereceksin?</label>
            <select class="form-control custom-select text-info" id="kime" data-placeholder="Kime Mesaj Göndereceksin?" tabindex="1" name="kime">
                                                       
        <?php
			

						$sorguk = $baglanti->prepare('Select * from Kullanicilar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorguk->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuck=$sorguk->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>                                               <option value="<?= $sonuck['id']?>"><?= $sonuck['ad']?> <?= $sonuck['soyad']?></option>
                   <?php
						}  // While Bitiş

						?>
						                                                           
                                                        
                                                    </select>
                                                  </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Mesaj Başlığı</label>
 <input type="text" id="birimadi" class="form-control" placeholder="Mesaj Başlığı" name="baslik">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                
   <label class="control-label">Mesaj İçeriği</label>
           <textarea class="form-control" id="mesaj" rows="5" name="mesaj"></textarea>            
                                                  </div>
                                            </div>
                                            <!--/span-->



                                        </div>
                                        <!--/row-->
   
    
									
									
									<input type="hidden" class="form-control" name="mesajekle">
		<button type="submit" class="btn btn-success btn-raised btn-block">
Mesajı Gönder</button>
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
                    url: "Islem/Mesaj.php", // POST işleminin olacağı sayfa
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
