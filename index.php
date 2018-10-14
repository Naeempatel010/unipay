<?php 
 require('checklogin.php');

?>

<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
  <body class="text-center" style="background-color: #8EDA45; 
  background: rgba(255, 255, 255, 0.5) url('images/logo2.png');">
    <form class="form-signin" name="form" action="users.php"  method="POST" style="background-color:white;">
      <img class="mb-4" src="images/logo.png" alt="FCRIT" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal" style="font-family: Arial, Helvetica, sans-serif;">FCRIT UniPay</h1>
      <input type="text"  name="rollno"   class="form-control" placeholder="Roll No" required autofocus>
      <input type="Password"   name="pass" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted" style="color:black">&copy; FCRIT, Vashi. All rights reserved.</p>
    
    </form>
      

  </body>

</html>