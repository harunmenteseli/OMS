<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Veritabanı Yedekleri - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary">Veritabanı Yedekleri</h4>
								</div>
								<div class="card-body ">

<br>
	
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
 <th>Yedek İsmi</th>
                                        
 <th>İşlem</th>

  </tr>
</thead>
        <tbody>      
								<?php

$dosyalar = glob("Yedeklemeler/*.sql");

foreach ($dosyalar as $dosya) {?> 

  
<tr>
<td>
<?= $dosya; ?>
</td>

<td>
<div class="form-button-action">
												

<button  type="button" data-toggle="tooltip" title="İndir" class="btn btn-icon btn-round btn-primary" data-original-title="İndir" onclick="window.location.href='<?= $dosya; ?>'"><i class="fa fa-download"></i></button>
   <form action="VeriTabaniYukle.php" method="POST">
            <input type="hidden" name="yedekle" value="<?= $dosya; ?>"> 
            <button type="submit" data-toggle="tooltip" title="Yükle" data-original-title="Yükle" class="btn btn-icon btn-round btn-success" name="gonder"/><i class="fa fa-upload"></i></button>
         </form>


									<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="../<?= $dosya; ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
</div>
</td>

</tr>
<?php } ?>

</tbody>
</table>
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
            $('#Sil').submit(function(e) {
				
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/VeriTabani.php", // POST işleminin olacağı sayfa
                    data: $("#Sil").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					
			})
        });
    </script>

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
                    url: "Islem/VeriTabani.php", // POST işleminin olacağı sayfa
                    data: 'verisil='+productId, // Formdaki tüm verileri al
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

	