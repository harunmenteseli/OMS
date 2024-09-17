<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Depo Giriş Çıkış Detay - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
	<?php


$depo = $baglanti->prepare("SELECT * FROM Depolar Where id=:id");
$depo->execute(['id' => (int)$_GET["id"]]);
$depom = $depo->fetch();//sorgu çalıştırılıp veriler alınıyor
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

									<h4 class="card-title"><?= $depom['depoadi']?> - DEPO GİRİŞ - ÇIKIŞ LİSTESİ</h4>
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
<table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>Ürün Kodu</th>                                          
 <th>Ürün Adı</th>
<th>Model</th>   
<th>Marka</th>
 
<th>Stok Grubu</th> 
<th>Stok Giriş</th> 
<th>Stok Çıkış</th>    
   <th>Stok Kalan</th>
<th>Birim</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">       
    
     <?php $sorgu = $baglanti->query("SELECT * FROM Urunler")->fetchAll();
                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
                                                        	
                                                
<tr id="secilen" class="Satirekle">
	      <td class="urunkodu"><?= $sonuc['urunkodu']?></td>
                    <td class="urunadi"><?= $sonuc['urunadi']?></td>
 <td class="marka">
 <?php 
                                                      $model = $baglanti->query("SELECT * FROM Modeller where id=".$sonuc["modeli"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($model)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($model as $modeli){
                                                            ?>
                                                    
                                                     <?php echo $modeli['modeladi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
 
</td>       
 <td class="model">
<?php 
                                                      $marka = $baglanti->query("SELECT * FROM Markalar where id=".$sonuc["markasi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($marka)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($marka as $markasi){
                                                            ?>
                                                    
                                                     <?php echo $markasi['markaadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>

</td>       

        
                    <td class="stokgrubu">
  
    <?php 
                                                      $stokgrup = $baglanti->query("SELECT * FROM StokGruplar where id=".$sonuc["stokgrubu"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($stokgrup)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($stokgrup as $grubu){
                                                            ?>
                                                    
                                                     <?php echo $grubu['stokgrupadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
                                                                                                                  
</td> 
<td>
<?php
$alistopla=$baglanti->prepare("SELECT SUM(adet) AS alis FROM AlisFaturasi where urunadi='$sonuc[id]' and depo='$depom[id]'");
$alistopla->execute();
$alisyaz= $alistopla->fetch();
$alistoplam=$alisyaz['alis'];
?>
	
	<?php
$alistransfer=$baglanti->prepare("SELECT SUM(miktar) AS alis FROM DepoTransfer where urun='$sonuc[id]' and girendepo='$depom[id]'");
$alistransfer->execute();
$alistransferyaz= $alistransfer->fetch();
$alistransfertoplam=$alistransferyaz['alis'];
?>
	<?php
$alisgiren  = $alistoplam;
$depogiren = $alistransfertoplam;
$giren  = $alisgiren + $depogiren;
?>
	<span class="text-success">
	<?= $giren;?>
</span>
</td> 
<td>
<?php
$satistopla=$baglanti->prepare("SELECT SUM(adet) AS satis FROM SatisFaturasi where urunadi='$sonuc[id]' and depo='$depom[id]'");
$satistopla->execute();
$satisyaz= $satistopla->fetch();
$satistoplam=$satisyaz['satis'];
?>
	<?php
$satistransfer=$baglanti->prepare("SELECT SUM(miktar) AS satis FROM DepoTransfer where urun='$sonuc[id]' and cikandepo='$depom[id]'");
$satistransfer->execute();
$satistransferyaz= $satistransfer->fetch();
$satistransfertoplam=$satistransferyaz['satis'];
?>
	<?php
$satiscikan = $satistoplam;
$depocikan = $satistransfertoplam;
$cikan = $satiscikan + $depocikan;
?>
	<span class="text-danger">
	<?= $cikan;?>
</span>
</td> 
<td>
<?php
$alis  = $giren;
$satis  = $cikan;
$kalan  = $alis - $satis;
if ($kalan > 0) {
    $renk = "success";
} 
 elseif ($kalan < 0){
    $renk = "danger";
}
elseif ($kalan == 0) {
$renk = "primary";
}

?>
	<span class="text-<?= $renk ?>">
	<?= $kalan;?>
</span>
</td>   
 <td class="model">
<?php 
                                                      $birim = $baglanti->query("SELECT * FROM Birim where id=".$sonuc["birimadi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($birim)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($birim as $birimi){
                                                            ?>
                                                    
                                                     <?php echo $birimi['birimadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>

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

</body>
</html>
