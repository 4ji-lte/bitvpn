<?php
echo "\nNuyul Point BitVPN\n\n";
enterurl:
$urllist = readline("Enter url : ");
if(empty($urllist)) {
        echo"[?] Url not found".PHP_EOL;
        goto enterurl;
}

$url = $urllist;
$no=0;
for($i =0;$i<1150;$i++){
$no++;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result1= curl_exec($ch);
echo "$no - $result1";
}
