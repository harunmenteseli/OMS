<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>ÜYELER ARASI MESAJLAR - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
include("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
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
<div class="row">
<div class="col-sm-9 col-md-9">

									<h4 class="card-title">ÜYELER ARASI MESAJ LİSTESİ</h4>
								</div>

<div class="col-sm-3 col-md-3">
<div class="row">
<div class="col-sm-9 col-md-9">
<h4 class="card-title table-head-bg-primary">

</h4>	
</div>
<div class="col-sm-3 col-md-3">
<div class="form-button-action">
												
															

										
														</div>

</div>
</div>

								
								</div>
</div>


</div>

								<div id="yazdir" class="card-body ">
						<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>
<div class=" table-responsive">
	<div class="form-button-action">
    <button type="button" class="btn btn-primary" onclick="tiklama('kopyala');">
           <span class="btn-label">
            <i class="far fa-clipboard"></i>
          </span> 
          <span class="text">Kopyala</span>
        </button>
     <button type="button" class="btn btn-warning" onclick="tiklama('yazdir');">
           <span class="btn-label">
            <i class="fas fa-print"></i>
          </span> 
          <span class="text">Yazdır</span>
        </button>
 
   <button type="button" class="btn btn-success" onclick="tiklama('excel');">
           <span class="btn-label">
            <i class="far fa-file-excel"></i>
          </span> 
          <span class="text">Excel</span>
        </button>
   <button type="button" class="btn btn-danger" onclick="tiklama('pdf');">
           <span class="btn-label">
            <i class="far fa-file-pdf"></i>
          </span> 
          <span class="text">PDF</span>
        </button>
   <button type="button" class="btn btn-info" onclick="tiklama('csv');">
           <span class="btn-label">
            <i class="far fa-file-csv"></i>
          </span> 
          <span class="text">CSV</span>
        </button>

</div>
<br>
     <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover mt-3">
                                                        <thead>
                                                            <tr>
 <th>Mesaj Gönderen</th>                                          
 <th>Mesaj Alan</th>
  <th>Mesaj Tarihi</th>
<th>Başlık</th> 
<th>Mesaj İçeriği</th>
<th>Okunma</th>
<th>Göderen Durumu</th>
<th>Alan Durumu</th>
<th>İşlem</th>
  </tr>
</thead>
        <tbody id="Urunlistesi">  
<?php
			

						$sorgu = $baglanti->prepare('Select * from Mesajlar'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
						$sorgu->execute(); // Sorgumuzu çalıştırıyoruz

						while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
						
						{  // While Başlangıcı

							?>
      
<tr id="secilen" class="Satirekle">
<td class="text-danger"><?php $kimden = $baglanti->query("SELECT * FROM Kullanicilar where id=".$sonuc["kimden"])->fetchAll(PDO::FETCH_ASSOC);
if(count($kimden)>0){ ?>
<?php
foreach($kimden as $kimdenim){
?>
<?= $kimdenim['ad']?> <?= $kimdenim['soyad']?>
                                                    <?php }?>
       <?php } ?></td>
<td class="text-success"><?php $kime = $baglanti->query("SELECT * FROM Kullanicilar where id=".$sonuc["kime"])->fetchAll(PDO::FETCH_ASSOC);
if(count($kime)>0){ ?>
<?php
foreach($kime as $kimem){
?>
<?= $kimem['ad']?> <?= $kimem['soyad']?>
                                                    <?php }?>
       <?php } ?></td>
<td class="text-warning"><?= $sonuc['mesajtarihi']?></td>
<td class="text-secondary"><?= $sonuc['baslik']?></td>
<td class="text-info"><?= $sonuc['mesaj']?></td>
<td><?php if ($sonuc['okunma'] == "0") {?>
<span class="text-danger">Okunmadı</span>
<?php }?>
<?php if ($sonuc['okunma'] == "1") {?>
<span class="text-success">Okundu</span>
<?php }?>
</td>
<td class="sira"><?php if ($sonuc['gonderenpasif'] == "0") {?>
<span class="text-success">Silmemiş</span>
<?php }?>
<?php if ($sonuc['gonderenpasif'] == "1") {?>
<span class="text-danger">Silmiş</span>
<?php }?></td>
<td class="sira"><?php if ($sonuc['alanpasif'] == "0") {?>
<span class="text-success">Silmemiş</span>
<?php }?>
<?php if ($sonuc['alanpasif'] == "1") {?>
<span class="text-danger">Silmiş</span>
<?php }?></td>
<td>															<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button></td>
   </tr>
									<?php
						}  // While Bitiş

						?>
						           

                                                                                
                                                        </tbody>
                                                    </table>
							</div>		
					<?php }?>
<?php 
 if ($kbilgi["yetki"]== 1 or $kbilgi["yetki"]==2) {?>	
<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
<?php }?>			
									
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
                    url: "Islem/Mesaj.php", // POST işleminin olacağı sayfa
                    data: 'mesajsil='+productId, // Formdaki tüm verileri al
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

	