<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Mesajlar - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
				
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='MesajEkle.php'">
Mesaj Gönder</button>
					<h4 class="page-title">MESAJ LİSTESİ</h4>
					<div class="row">
						<div class="col-md-12">
							     <?php $mesaj = $baglanti->query("Select * from Mesajlar order by mesajtarihi desc")->fetchAll();
                                                         foreach ($mesaj as $mesajim) {
                                                        ?> 

							<ul class="timeline">
<?php if($mesajim["kime"] == $kbilgi["id"] && $mesajim["alanpasif"] == 0){?>
								<li>
									<div class="timeline-badge success">
<?php if($mesajim["okunma"] == 1){?>
<i class="fas fa-envelope-open"></i>
 <?php } ?>
<?php if($mesajim["okunma"] == 0){?>
<i class="fas fa-envelope"></i>
 <?php } ?>
</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title text-success"><?php 
                                                      $gelen = $baglanti->query("SELECT * FROM Kullanicilar where id=".$mesajim["kime"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($gelen)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($gelen as $gelenim){
                                                            ?>
                                                    
                                                     <?= $gelenim['ad'] ?> <?= $gelenim['soyad'] ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></h4>
		</div>
										<div class="timeline-body">
<p class="text-info"><?= $mesajim['mesajtarihi']?></p>
											<p><?= $mesajim['baslik']?></p>
<hr>
<div class="form-button-action">
<button  type="button" data-toggle="modal" title="Göster" data-target="#goster" data-id="<?= $mesajim['id']?>" id="fatura" class="btn btn-icon btn-round btn-success" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
	<button id="alanpasif" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $mesajim["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
</div>
										</div>
									</div>
								</li>

	<?php } ?>
<?php if($mesajim["kimden"] == $kbilgi["id"] && $mesajim["gonderenpasif"] == 0){?>
								<li class="timeline-inverted">
									<div class="timeline-badge danger">
<?php if($mesajim["okunma"] == 1){?>
<i class="fas fa-envelope-open"></i>
 <?php } ?>
<?php if($mesajim["okunma"] == 0){?>
<i class="fas fa-envelope"></i>
 <?php } ?>
</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title text-danger"><?php 
                                                      $giden = $baglanti->query("SELECT * FROM Kullanicilar where id=".$mesajim["kime"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($giden)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($giden as $gidenim){
                                                            ?>
                                                    
                                                     <?= $gidenim['ad'] ?> <?= $gidenim['soyad'] ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></h4>
										</div>
										<div class="timeline-body">
<p class="text-info"><?= $mesajim['mesajtarihi']?></p>
											<p><?= $mesajim['baslik']?></p>
<hr>
<div class="form-button-action">
<button type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='MesajDuzenle.php?id=<?= $mesajim["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
		<button id="gonderenpasif" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $mesajim["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
</div>
										</div>
									</div>
								</li>
							
	
	<?php } ?>
<?php }?>
							</ul>
						</div>
					</div>					







<div class="modal fade bd-example-modal-lg" id="goster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">MESAJ DETAYI</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">

                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="Resimler/hesapp.gif">
                       	   </div>                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>    

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
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
            $(document).on('click', '#gonderenpasif', function(e){
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
                    url: "Islem/Mesaj.php", // POST işleminin olacağı sayfa
                    data: 'gonderenpasif='+productId, // Formdaki tüm verileri al
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
    <script>
        $(document).ready(function(){
            $(document).on('click', '#alanpasif', function(e){
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
                    url: "Islem/Mesaj.php", // POST işleminin olacağı sayfa
                    data: 'alanpasif='+productId, // Formdaki tüm verileri al
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
    <script>
$(document).ready(function(){
	
	$(document).on('click', '#fatura', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/MesajGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>	

</body>
</html>

	