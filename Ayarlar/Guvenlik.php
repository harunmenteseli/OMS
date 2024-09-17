<?php
if (isset($_SESSION["kullaniciadi"])) {
 $kullaniciadi  = $_SESSION["kullaniciadi"];

 $kbilgi= $baglanti->query("select * from Kullanicilar where kullaniciadi='$kullaniciadi'")->fetch();
  if ($kbilgi["yetki"]>0) {?>
  <?php }  else if($kbilgi["yetki"]==0){ header("Location:Giris.php"); } } elseif(!isset($_SESSION["kullaniciadi"])){header("Location:Giris.php");} ?>

