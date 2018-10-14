<?php 
include('config.php');
session_start();
$conn= mysqli_connect($host, $user, $password, $db) or die("no sql connection ");
//echo "connection to sql complete";

if (isset($_POST['submit'])){
    echo  "working";
    $rollno= $_POST['rollno'];
    $password =  $_POST['pass'];
    echo "$rollno $password";
    $query = "SELECT * FROM student WHERE roll_no='$rollno'.,";
    $query_fire = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_fire) == 1) {
        $row=mysqli_fetch_assoc($result);
        if(password_verify($password,$row['hashed_pass']))
        $_SESSION['username'] = $rollno;
        $_SESSION['success'] = "You are now logged in";
        header('location:user.php');
    }
    else{
        array_push($errors, "Wrong username/password combination");
        //header('location:error.php');
    }
mysqli_close($conn);
}
else{
  //echo "POST not working";
  //header('location:index.php');
}

//header("location:users.php")

?>
