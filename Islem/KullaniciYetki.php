<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
if ($_POST) { //post var mı diye bakıyoruz
    
 $id = (int)$_POST['id'];
    $cariekle = (int)$_POST['cariekle'];
$cariduzenle = (int)$_POST['cariduzenle'];
$carisil = (int)$_POST['carisil'];
$carigrupekle = (int)$_POST['carigrupekle'];
$carigrupduzenle = (int)$_POST['carigrupduzenle'];
$carigrupsil = (int)$_POST['carigrupsil'];
$parabirimiekle = (int)$_POST['parabirimiekle'];
$parabirimiduzenle = (int)$_POST['parabirimiduzenle'];
$parabirimisil = (int)$_POST['parabirimisil'];
$stokekle = (int)$_POST['stokekle'];
$stokduzenle = (int)$_POST['stokduzenle'];
$stoksil = (int)$_POST['stoksil'];
$stokgrupekle = (int)$_POST['stokgrupekle'];
$stokgrupduzenle = (int)$_POST['stokgrupduzenle'];
$stokgrupsil = (int)$_POST['stokgrupsil'];
$birimekle = (int)$_POST['birimekle'];
$birimduzenle = (int)$_POST['birimduzenle'];
$birimsil = (int)$_POST['birimsil'];
$markaekle = (int)$_POST['markaekle'];
$markaduzenle = (int)$_POST['markaduzenle'];
$markasil = (int)$_POST['markasil'];
$modelekle = (int)$_POST['modelekle'];
$modelduzenle = (int)$_POST['modelduzenle'];
$modelsil = (int)$_POST['modelsil'];
$kdvekle = (int)$_POST['kdvekle'];
$kdvduzenle = (int)$_POST['kdvduzenle'];
$kdvsil = (int)$_POST['kdvsil'];
$otvekle = (int)$_POST['otvekle'];
$otvduzenle = (int)$_POST['otvduzenle'];
$otvsil = (int)$_POST['otvsil'];
$alisfaturaekle = (int)$_POST['alisfaturaekle'];
$alisfaturaduzenle = (int)$_POST['alisfaturaduzenle'];
$alisfaturasil = (int)$_POST['alisfaturasil'];
$satisfaturaekle = (int)$_POST['satisfaturaekle'];
$satisfaturaduzenle = (int)$_POST['satisfaturaduzenle'];
$satisfaturasil = (int)$_POST['satisfaturasil'];
$verilencekekle = (int)$_POST['verilencekekle'];
$verilencekduzenle = (int)$_POST['verilencekduzenle'];
$verilenceksil = (int)$_POST['verilenceksil'];
$verilensenetekle = (int)$_POST['verilensenetekle'];
$verilensenetduzenle = (int)$_POST['verilensenetduzenle'];
$verilensenetsil = (int)$_POST['verilensenetsil'];
$alinancekekle = (int)$_POST['alinancekekle'];
$alinancekduzenle = (int)$_POST['alinancekduzenle'];
$alinanceksil = (int)$_POST['alinanceksil'];
$alinansenetekle = (int)$_POST['alinansenetekle'];
$alinansenetduzenle = (int)$_POST['alinansenetduzenle'];
$alinansenetsil = (int)$_POST['alinansenetsil'];
$kasaekle = (int)$_POST['kasaekle'];
$kasaduzenle = (int)$_POST['kasaduzenle'];
$kasasil = (int)$_POST['kasasil'];
$kasagirisekle = (int)$_POST['kasagirisekle'];
$kasagirisduzenle = (int)$_POST['kasagirisduzenle'];
$kasagirissil = (int)$_POST['kasagirissil'];
$kasacikisekle = (int)$_POST['kasacikisekle'];
$kasacikisduzenle = (int)$_POST['kasacikisduzenle'];
$kasacikissil = (int)$_POST['kasacikissil'];
$bankaekle = (int)$_POST['bankaekle'];
$bankaduzenle = (int)$_POST['bankaduzenle'];
$bankasil = (int)$_POST['bankasil'];
$bankagirisekle = (int)$_POST['bankagirisekle'];
$bankagirisduzenle = (int)$_POST['bankagirisduzenle'];
$bankagirissil = (int)$_POST['bankagirissil'];
$bankacikisekle = (int)$_POST['bankacikisekle'];
$bankacikisduzenle = (int)$_POST['bankacikisduzenle'];
$bankacikissil = (int)$_POST['bankacikissil'];
$depoekle = (int)$_POST['depoekle'];
$depoduzenle = (int)$_POST['depoduzenle'];
$deposil = (int)$_POST['deposil'];
$depotransferekle = (int)$_POST['depotransferekle'];
$depotransferduzenle = (int)$_POST['depotransferduzenle'];
$depotransfersil = (int)$_POST['depotransfersil'];
$carialacaklandir = (int)$_POST['carialacaklandir'];
$carialacaklandirduzenle = (int)$_POST['carialacaklandirduzenle'];
$carialacaklandirsil = (int)$_POST['carialacaklandirsil'];
$cariborclandir = (int)$_POST['cariborclandir'];
$cariborclandirduzenle = (int)$_POST['cariborclandirduzenle'];
$cariborclandirsil = (int)$_POST['cariborclandirsil'];
$personelekle = (int)$_POST['personelekle'];
$personelduzenle = (int)$_POST['personelduzenle'];
$personelsil = (int)$_POST['personelsil'];
$personelmaasekle = (int)$_POST['personelmaasekle'];
$personelmaasduzenle = (int)$_POST['personelmaasduzenle'];
$personelmaassil = (int)$_POST['personelmaassil'];
$personelmesaiekle = (int)$_POST['personelmesaiekle'];
$personelmesaiduzenle = (int)$_POST['personelmesaiduzenle'];
$personelmesaisil = (int)$_POST['personelmesaisil'];
$personelizinekle = (int)$_POST['personelizinekle'];
$personelizinduzenle = (int)$_POST['personelizinduzenle'];
$personelizinsil = (int)$_POST['personelizinsil'];
$personelodemeekle = (int)$_POST['personelodemeekle'];
$personelodemeduzenle = (int)$_POST['personelodemeduzenle'];
$personelodemesil = (int)$_POST['personelodemesil'];
    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $baglanti->query("UPDATE Kullanicilar SET cariekle=$cariekle, cariduzenle=$cariduzenle, carisil=$carisil, carigrupekle=$carigrupekle, carigrupduzenle=$carigrupduzenle, carigrupsil=$carigrupsil, parabirimiekle=$parabirimiekle, parabirimiduzenle=$parabirimiduzenle, parabirimisil=$parabirimisil, stokekle=$stokekle, stokduzenle=$stokduzenle, stoksil=$stoksil, stokgrupekle=$stokgrupekle, stokgrupduzenle=$stokgrupduzenle, stokgrupsil=$stokgrupsil, birimekle=$birimekle, birimduzenle=$birimduzenle, birimsil=$birimsil, markaekle=$markaekle, markaduzenle=$markaduzenle, markasil=$markasil, modelekle=$modelekle, modelduzenle=$modelduzenle, modelsil=$modelsil, kdvekle=$kdvekle, kdvduzenle=$kdvduzenle, kdvsil=$kdvsil, otvekle=$otvekle, otvduzenle=$otvduzenle, otvsil=$otvsil, alisfaturaekle=$alisfaturaekle, alisfaturaduzenle=$alisfaturaduzenle, alisfaturasil=$alisfaturasil, satisfaturaekle=$satisfaturaekle, satisfaturaduzenle=$satisfaturaduzenle, satisfaturasil=$satisfaturasil, 
verilencekekle=$verilencekekle, verilencekduzenle=$verilencekduzenle, verilenceksil=$verilenceksil, verilensenetekle=$verilensenetekle, verilensenetduzenle=$verilensenetduzenle, verilensenetsil=$verilensenetsil,alinancekekle=$alinancekekle, alinancekduzenle=$alinancekduzenle, alinanceksil=$alinanceksil, alinansenetekle=$alinansenetekle, alinansenetduzenle=$alinansenetduzenle, alinansenetsil=$alinansenetsil, kasaekle=$kasaekle, kasaduzenle=$kasaduzenle, kasasil=$kasasil, kasagirisekle=$kasagirisekle, kasagirisduzenle=$kasagirisduzenle, kasagirissil=$kasagirissil, kasacikisekle=$kasacikisekle, kasacikisduzenle=$kasacikisduzenle, kasacikissil=$kasacikissil, bankaekle=$bankaekle, bankaduzenle=$bankaduzenle, bankasil=$bankasil, bankagirisekle=$bankagirisekle, bankagirisduzenle=$bankagirisduzenle, bankagirissil=$bankagirissil, bankacikisekle=$bankacikisekle, bankacikisduzenle=$bankacikisduzenle, bankacikissil=$bankacikissil, depoekle=$depoekle, depoduzenle=$depoduzenle, deposil=$deposil,
depotransferekle=$depotransferekle, depotransferduzenle=$depotransferduzenle, depotransfersil=$depotransfersil, carialacaklandir=$carialacaklandir, carialacaklandirduzenle=$carialacaklandirduzenle, carialacaklandirsil=$carialacaklandirsil, cariborclandir=$cariborclandir, cariborclandirduzenle=$cariborclandirduzenle, cariborclandirsil=$cariborclandirsil, personelekle=$personelekle, personelduzenle=$personelduzenle, personelsil=$personelsil, personelmaasekle=$personelmaasekle, personelmaasduzenle=$personelmaasduzenle, personelmaassil=$personelmaassil, personelmesaiekle=$personelmesaiekle, personelmesaiduzenle=$personelmesaiduzenle, personelmesaisil=$personelmesaisil, personelizinekle=$personelizinekle, personelizinduzenle=$personelizinduzenle, personelizinsil=$personelizinsil, personelodemeekle=$personelodemeekle, personelodemeduzenle=$personelodemeduzenle, personelodemesil=$personelodemesil  WHERE id=$id");

    //gerekli ise geriye değer döndürüyoruz
    echo $id . " nolu kayıt değiştirildi";
}


?>