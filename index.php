<?php


include "class.BasicSefLink.php";

$seflink = new BasicSefLink();

/* Örnek Kullanım */
$TurkVeri = "GitLabda Oluşturduğumuz Projeye Bilgisayarımızdan Dosya Yüklemek";
echo $seflink->basicselflink($TurkVeri);


 ?>
