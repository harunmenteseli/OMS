<?php
session_start();
$host = 'localhost';
$dbname = 'muhasebe';

$username = 'root';
$password = '';
$charset = 'utf8';
//$collate = 'utf8_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];
try {
    $baglanti = new PDO($dsn, $username, $password, $options);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
    exit;
}


date_default_timezone_set('Europe/Istanbul');
error_reporting(0);
// Bu pazartesi haftanın kaçı
$haftailkgun = date("Y-m-d",strtotime('monday this week'));
// Bu pazar haftanın kaçı
$haftasongun = date("Y-m-d",strtotime('sunday this week'));


 $ayar= $baglanti->query("select * from Ayarlar")->fetch();
 
$rastgelesayi = mt_rand(1,1000000);

$rastgelebarkod = mt_rand(8680000000000,8689999999999);

$seed = str_split('ABCDEFGHIJKLMNOPRSTUVYZ'); 
shuffle($seed);
$rastgeleharf = '';
foreach (array_rand($seed, 2) as $k) $rastgeleharf .= $seed[$k];

?>