<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="icon" href="favicon.png" type="image/x-icon">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
<meta name="description" content="">

    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">



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

            <li role="presentation" ><a href="#">Home</a></li>

            <li role="presentation"><a href="upload.php">Upload</a></li>

            <li role="presentation" class="active"><a href="login.php">Login</a></li>

	    <li role="presentation"><a href="about.php">About</a></li>

		<li role="presentation"><a href="index02.php">Servers</a></li> 

	          </ul>

        </nav>
        <h3 class="text-muted"><RIVERRUN></h3>
      </div>

      <div class="jumbotron">

<span id="logo"> L O G I N / R E G I S T E R</span>
      </div>


<table width="100%">
<tr>
<td width="50%">
<form action="USER/login.php" method="POST">

<h1>Login</h1>

User</br>
<input type="text" name="userlogin" ></br>

Password</br>
<input type="password" name="passlogin" ></br>
</br>
<input type="submit" align="" name="button01" value="login" >
</form>

</td>

<td>
<form action="USER/registration.php" method="POST">

<h1>Register</h1>


Generate a random username and password for login</br>

<u>important note</u> : You cannot delete or edit any file once uploaded</br>

</br>
<input type="submit" align="" name="button01" value="generate" >
</form>
</td>
</tr>
</table>



 </div>


      <footer class="footer">
        

     </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
