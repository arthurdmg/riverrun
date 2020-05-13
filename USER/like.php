<?php session_start();


error_reporting(0);

include ("riverrun.php");
include ("../spam_block.php");

$file = $_GET['file'];
$username = $_SESSION['user'];

mkdir("LIKE/$file", 0700);


$fp2 = fopen("LIKE/$file/$username", "w");

fclose($fp2);


echo "liked";


?>

