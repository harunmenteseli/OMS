<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php

if ($_POST['logoarka']) {

$logoarka = $_POST['logoarka'];
        $satir = [                       
'logoarka' => $logoarka,


        ];
          $sql = "UPDATE Tema SET logoarka=:logoarka;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['ustmenuarka']) {

$ustmenuarka = $_POST['ustmenuarka'];
        $satir = [                       
'ustmenuarka' => $ustmenuarka,


        ];
          $sql = "UPDATE Tema SET ustmenuarka=:ustmenuarka;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['yanmenuarka']) {

$yanmenuarka = $_POST['yanmenuarka'];
        $satir = [                       
'yanmenuarka' => $yanmenuarka,


        ];
          $sql = "UPDATE Tema SET yanmenuarka=:yanmenuarka;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}
if ($_POST['arkaplan']) {

$arkaplan = $_POST['arkaplan'];
        $satir = [                       
'arkaplan' => $arkaplan,


        ];
          $sql = "UPDATE Tema SET arkaplan=:arkaplan;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['tablorenk']) {

$tablorenk = $_POST['tablorenk'];
        $satir = [                       
'tablorenk' => $tablorenk,


        ];
          $sql = "UPDATE Tema SET tablorenk=:tablorenk;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['logorenk']) {

$logorenk = $_POST['logorenk'];
        $satir = [                       
'logorenk' => $logorenk,


        ];
          $sql = "UPDATE Tema SET logorenk=:logorenk;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['sloganrenk']) {

$sloganrenk = $_POST['sloganrenk'];
        $satir = [                       
'sloganrenk' => $sloganrenk,


        ];
          $sql = "UPDATE Tema SET sloganrenk=:sloganrenk;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['logoyazi']) {

$logoyazi = $_POST['logoyazi'];
        $satir = [                       
'logoyazi' => $logoyazi,


        ];
          $sql = "UPDATE Tema SET logoyazi=:logoyazi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}


if ($_POST['logoboyut']) {

$logoboyut = $_POST['logoboyut'];
        $satir = [                       
'logoboyut' => $logoboyut,


        ];
          $sql = "UPDATE Tema SET logoboyut=:logoboyut;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['sloganyazi']) {

$sloganyazi = $_POST['sloganyazi'];
        $satir = [                       
'sloganyazi' => $sloganyazi,


        ];
          $sql = "UPDATE Tema SET sloganyazi=:sloganyazi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

if ($_POST['sloganboyut']) {

$sloganboyut = $_POST['sloganboyut'];
        $satir = [                       
'sloganboyut' => $sloganboyut,


        ];
          $sql = "UPDATE Tema SET sloganboyut=:sloganboyut;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}


if ($_POST['animasyon']) {

$animasyon = $_POST['animasyon'];
        $satir = [                       
'animasyon' => $animasyon,


        ];
          $sql = "UPDATE Tema SET animasyon=:animasyon;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Tema.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
  
  
}

?>