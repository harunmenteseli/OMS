<?php
require("../Ayarlar/Baglantim.php"); 
ob_start();
session_start();
?>
<?php
/* Giriş Yap */
      if (isset($_POST["loginol"])) {
        $kullaniciadi  =$_POST["kullaniciadi"];
     $sifre = sha1(md5($_POST['sifre']));
        if($kullaniciadi == ""){ 
	echo '<script>swal("Hata","Kullanıcı Adı Alanını Doldurun.","error");</script>';
	}
else if($sifre == ""){ 
	echo '<script>swal("Hata","Şifre Alanını Doldurun.","error");</script>';
	}
	else {
          $kullanicivarmi= $baglanti->prepare("select * from Kullanicilar where kullaniciadi=? && sifre=?");
          $kullanicivarmi->execute(array($kullaniciadi,$sifre));
          $row= $kullanicivarmi->rowCount();
if ($row>0) {
            $_SESSION["kullaniciadi"]=$kullaniciadi;
            $_SESSION["sifre"]=$sifre;
           echo '<script>swal({
            title:"Tebrikler",
            text: "Giriş Başarılı.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "index.php"});
            </script>';
           
           
          }else{
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
          }
      }
      }
      
      if (isset($_POST["cikisyap"])) {
unset($_SESSION["kullaniciadi"]);
unset($_SESSION["kullaniciadi"]);
echo '<script>swal({
            title:"Tebrikler",
            text: "Çıkış Başarılı.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Giris.php"});
            </script>';

            }



     /* Giriş Yap */
      if (isset($_POST["unuttum"])) {
        $kullaniciadi  =$_POST["kullaniciadi"];
     $mail = $_POST['mail'];
 $gizlisoru = $_POST['gizlisoru'];
 $gizlicevap = $_POST['gizlicevap'];
        if($kullaniciadi == ""){ 
	echo '<script>swal("Hata","Kullanıcı Adı Alanını Doldurun.","error");</script>';
	}
else if($mail == ""){ 
	echo '<script>swal("Hata","Mail Alanını Doldurun.","error");</script>';
	}
else if($gizlisoru == ""){ 
	echo '<script>swal("Hata","Gizli Soru Alanını Doldurun.","error");</script>';
	}
else if($gizlicevap == ""){ 
	echo '<script>swal("Hata","Gizli Cevap Alanını Doldurun.","error");</script>';
	}
	else {
          $kullanicivarmi= $baglanti->prepare("select * from Kullanicilar where kullaniciadi=? && mail=? && gizlisoru=? && gizlicevap=?");
          $kullanicivarmi->execute(array($kullaniciadi,$mail,$gizlisoru,$gizlicevap));
          $row= $kullanicivarmi->rowCount();
if ($row>0) {
            $_SESSION["kullaniciadi"]=$kullaniciadi;
            
           echo '<script>swal({
            title:"Tebrikler",
            text: "Giriş Başarılı.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "index.php"});
            </script>';
           
           
          }else{
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
          }
      }
      }
      ?>