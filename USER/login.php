<?php session_start();



$name_login = $_POST['userlogin'];

$pass_login = $_POST['passlogin'];

$msg_check = $_POST['button01'];



if ($msg_check != ""){


$name_login_form = "USER/" . $name_login . ".php";


if (file_exists ("$name_login_form")){

include ($name_login_form);

if ($pass == $pass_login and $pass_login != ""){
echo "<h1>Logged!</h1> <a href='index.php'> Click here to continue</a>";
$_SESSION['user'] = $name_login; }else{
echo "<span class='info'> not allowed</span>";}
}else{
echo "<span class='info'> not allowed</span>";}
}

?>

