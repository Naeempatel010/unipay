<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
body {
    font-family: "TimesNewRoman", sans-serif;

}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 70px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 30px;
    color: white;
    display: block;
    transition: 0.2s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.logoutnav{
    float:left;
    position:absolute;
    top:0px;
    left:90%;
    height:100%;
    width:20%;
    background-image: url("images/nav-bg.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.logoutnav a {
  padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 30px;
    color: white;
    display: block;

}
.main{

position:absolute;
top:0px;
left:300px;
width:1570px;
height:100%;
background-image: url("images/home-bg.jpg");
background-repeat: no-repeat;
background-position: center;
opacity: 0.8;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onmouseover="closeNav()">&times;</a>
  <a href="users.php">Home</a>
  <a href="paymentHistory.php">Payment History</a>
  <a href="profile.php">Profile</a>
  
</div>
<span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="logoutnav">
<a href="index.php">Logout</a>

</div>

<div class="main" >

</div>     
</body>
</html> 
