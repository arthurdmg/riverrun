﻿<?php

function current_date() {
    
    $day = date("d");

    $month = date("m");

    $year = date("y");



    $symbol = "/";
	
    $date = $day . $symbol . $month . $symbol . $year;	
    return $date;
}


function ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function check_online($domain) {
   $curlInit = curl_init($domain);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   //get answer
   $response = curl_exec($curlInit);

   curl_close($curlInit);
   if ($response) return true;
   return false;
}


function random_hexa() {
    return str_pad(dechex(mt_rand(0, 0xFFFFFFFFFFFFFF)), 14, '0', STR_PAD_LEFT);
}


function upload() {     
   
    $file = $_POST['file'];



    $dir = './FILES/';


    
        

    $file_name = basename($_FILES["file"]["name"]);



    $file_name2 = $_FILES["file"]["tmp_name"];

    $sha1_name = sha1_file($file_name2);

    $extension = substr($file_name, -4);

    $final_name = $sha1_name . $extension;

    if(file_exists("$dir/$final_name")){echo 'already exists!'; die;}


    $imageFileType = strtolower(pathinfo($dir2, PATHINFO_EXTENSION));




    $dir3 = $dir . '/' . $final_name;


    move_uploaded_file($file_name2, $dir3);


    return $final_name;	
}

function file_size_readable($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}


function search($mod) {

    $search = $_POST['search'];


    $x = 0;


    foreach (glob("WORDS/$search/*") as $file){


    foreach (glob("$file/*") as $file2){


    foreach (glob("$file2/*") as $file3){
echo $file3 . "</br>";


    foreach (glob("$file3/*") as $file4){
$exp = explode("/", $file4);

    $files = $exp[5];    
 
    if ($mod == 0){     	

    $filesize = filesize("FILES/$files");

    if ($filesize > 1){$filesize = file_size_readable($filesize);}

    echo "<a href='FILES/$files'>$files</a> $filesize</br>";



    } else {


    $extension = substr($files, -3);

    if ($extension == "png" || $extension == "jpg" || $extension == "gif" || $extension == "jpeg"){

    echo "<a href='FILES/$files'><img src='FILES/$files' width='47%' height='47%' alt='$files'></a> ";

    } elseif ($extension == "mp4"){

    echo "<video controls width='47%' height='47%'><source src='FILES/$files' type='video/mp4'></video> ";

    } else{

    if ($extension == "webm"){echo "<video controls width='47%' height='47%'><source src='FILES/$files' type='video/webm'></video> ";} 

    if ($extension == "mp3"){echo "<audio controls src='FILES/$files'><code>audio</code></audio> ";} 

    echo "</br><a href='FILES/$files'>$files</a></br>";


    }	


    }


    $x++;
if ($x > 100){die;}
}

}

}

}


    echo "</br>results : " . $x;

	
    echo "</br> <a href='search_simple.php' > simple search </a>";


}



?>