<?php session_start();



error_reporting(0);

include ("../riverrun.php");
include ("../spam_block.php");

$password = random_hexa();
$user = random_hexa();


$dir = "USER/$user" ;

$pass = '<?php $pass="' . $password . '";?>';
	

$name_file = $dir . ".php";

$file = fopen($name_file, 'w');
fwrite($file, $pass);
fclose($file);


$dir02 = "USER";

$dir03 = 'USER/' . $user;


if (!file_exists ('USER')){
mkdir('USER', 0700);}

if (!file_exists ($dir03)){
mkdir($dir03, 0700);}


echo "<h1>Registration success</h1>";

$_SESSION['user'] = $user;


echo "user: $user </br>";
echo "password: $password </br>";


?>