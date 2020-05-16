<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="icon" href="favicon.jpg" type="image/x-icon">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
<meta name="description" content="">

    <meta name="author" content="">
  



    <title>riverrun</title>


    <!-- Bootstrap core CSS -->
    <link href="TEMPLATES/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <link href="TEMPLATES/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="TEMPLATES/jumbotron-narrow.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
<script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js">
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">

        <nav>
          <ul class="nav nav-pills pull-right">

            <li role="presentation" ><a href="index.php">Home</a></li>

            <li role="presentation" class="active"><a href="upload.html">Upload</a></li>

            <li role="presentation"><a href="login.php">Login</a></li>

            <li role="presentation"><a href="about.php">About</a></li>

	    <li role="presentation"><a href="index02.php">Servers</a></li>
  

	          </ul>

        </nav>
        <h3 class="text-muted"><RIVERRUN></h3>
      </div>

      <div class="jumbotron">

<span id="logo">U P L O A D</span>
      </div>




<div align="center" class="main">




<form action='uploaded.php' method='POST' enctype='multipart/form-data'>
<input type="file" name='file' id='file' onchange="filename()">

</br><i>tags</i></br>

<input type="text" id="hashtag01" name="tag1" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag01', label='label01')" onfocus="valid(label='label01')">

<label id="label01" ></label></br>

<input type="text" id="hashtag02" name="tag2" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag02', label='label02')" onfocus="valid(label='label02')">

<label id="label02" ></label></br>
<input type="text" id="hashtag03" name="tag3" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag03', label='label03')" onfocus="valid(label='label03')">

<label id="label03" ></label></br>
<input type="text" id="hashtag04" name="tag4" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag04', label='label04')" onfocus="valid(label='label04')">

<label id="label04" ></label></br>
<input type="text" id="hashtag05" name="tag5" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag05', label='label05'), filename()" onfocus="valid(label='label05')">

<label id="label05" ></label></br>


<input type="submit" name="button" class="btn btn-lg btn-success" id="button01" disabled>



<script>

function filename(){


var filepath = document.getElementById('file').value;
file = filepath.substring(12,filepath.length);
document.getElementById('name01').value = file;

var names = document.getElementById('name01').value;

names = names.toLowerCase();

names = names.replace(/[^a-z0-9]/gi,' ');


document.getElementById('hashtag06').value = names.substr(names.length - 3);

var n = names.split(" ");


var loop = 0;

while (loop <= 8){

if (typeof n[loop] === "undefined"){n[loop] = "";}
if (n[loop] == " " || n[loop] == "  " ){n[loop] = "";}

loop++;
}

if (n[8] == "") {
n[8] = document.getElementById('hashtag01').value + " " + document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value;
}

if (n[7] == "") {
n[7] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value + " " + document.getElementById('hashtag04').value;
}

if (n[6] == "") {
n[6] = document.getElementById('hashtag01').value + " " + document.getElementById('hashtag02').value;
}

if (n[5] == "") {
n[5] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value;
}

if (n[4] == "") {
n[4] = document.getElementById('hashtag03').value + " " + document.getElementById('hashtag04').value;
}

if (n[3] == "") {
n[3] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag01').value;
}

if (n[2] == "") {
n[2] = document.getElementById('hashtag03').value + " " + document.getElementById('hashtag02').value;
}

if (n[1] == "") {
n[1] = document.getElementById('hashtag04').value + " " + document.getElementById('hashtag03').value;
}

if (n[0] == "") {
n[0] = document.getElementById('hashtag04').value + " " + document.getElementById('hashtag05').value;
}


document.getElementById('hashtag07').value = n[0];
document.getElementById('hashtag08').value = n[1];
document.getElementById('hashtag09').value = n[2];
document.getElementById('hashtag10').value = n[3];
document.getElementById('hashtag11').value = n[4];
document.getElementById('hashtag12').value = n[5];
document.getElementById('hashtag13').value = n[6];
document.getElementById('hashtag14').value = n[7];
document.getElementById('hashtag15').value = n[8];

}



//logo style
var min = 000000;
var max = 999999;
var random = Math.floor(Math.random()*(max-min+1)+min);
var color = "#" + random;
document.getElementById('logo').style.color = color;

function valid(){
document.getElementById(label).innerHTML = 'checking...';
}



function validAlpha(){
// Allow only alphanumeric


var a = document.getElementById(hashtag).value;
a = a.toLowerCase();

var b = a.replace(/[^a-z0-9]/gi,'');

document.getElementById(hashtag).value = b;
document.getElementById(label).innerHTML = "Ok!";
document.getElementById(label).style.color = color;
var blankCheck = document.getElementById(hashtag).value;
if (blankCheck != ""){
document.getElementById('button01').disabled = false;
}else{
// If the user clear the textbox the buttom will be disabled again
document.getElementById('button01').disabled = true;
document.getElementById(label).innerHTML = "";
}

var c = document.getElementById('hashtag01').value;
var d = document.getElementById('hashtag02').value;
var e = document.getElementById('hashtag03').value;
var f = document.getElementById('hashtag04').value;
var g = document.getElementById('hashtag05').value;

// Set x for prevent NaN
var x = 0;
if (a == c){x++;}
if (a == d){x++;}
if (a == e){x++;}
if (a == f){x++;}
if (a == g){x++;}
// Deny repeat of values. But no warning blank fields
if (x > 1 && a != ""){
document.getElementById(label).innerHTML = "Same values";
document.getElementById(label).style.color = '#ff0000';
document.getElementById('button01').disabled = true;
}
//console.log(x);
var name = document.getElementById('name01').value;

if (name == ""){
document.getElementById('button01').disabled = true;
}else{
// Avoid this because can allow same 
//document.getElementById('button01').disabled = false;
}
}

</script>


<div class="suggest">
</br>
Automatic tags generated</br>
<input type="text" id="name01" name="name" placeholder="name">

<input type="text" id="hashtag06" name="tag6">
<input type="text" id="hashtag07" name="tag7">

<input type="text" id="hashtag08" name="tag8">

<input type="text" id="hashtag09" name="tag9">

<input type="text" id="hashtag10" name="tag10">

<input type="text" id="hashtag11" name="tag11">

<input type="text" id="hashtag12" name="tag12">
<input type="text" id="hashtag13" name="tag13">

<input type="text" id="hashtag14" name="tag14">

<input type="text" id="hashtag15" name="tag15">


</div>

</form>






 </div>


      <footer class="footer">
        <p>&copy; 2020 - riverrun</p>
 

     </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
