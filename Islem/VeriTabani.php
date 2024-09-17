<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
require("../Ayarlar/DBBackupRestore.class.php"); 
?>
<?php
    if (isset($_POST["verisil"])) {
       	$dosya = $_POST['verisil'];
	if(file_exists($dosya)){
	    unlink($dosya);
	 		echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VeriTabaniYedekleri.php"});
            </script>';
	}else{
		echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
	}
		
	}



?>