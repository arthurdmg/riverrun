<?php error_reporting(0); ?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="default.css">

</head>

<body>

<?php



include ("riverrun.php");

$x = 0;


foreach (glob("RECENT/$search/*") as $file){
//echo $file . "</br>";


foreach (glob("$file/*") as $file2){
//echo $file2 . "</br>";


foreach (glob("$file2/*") as $file3){
echo $file3 . "</br>";


foreach (glob("$file3/*") as $file4){
$exp = explode("/", $file4);

$files = $exp[5];


$filesize = filesize("FILES/$files");
$filesize = file_size_readable($filesize);

echo "<a href='FILES/$files'>$files</a> $filesize </br>";


$x++;


if ($x > 100){die;}
}

}

}

}


//echo "</br>results : " . $x;


?>

</body>
</html>