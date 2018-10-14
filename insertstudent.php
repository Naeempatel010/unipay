<?php

require('config.php');
$conn =mysqli_connect($host, $user, $password, $db);
if(!$conn){
	die('could not connect :' .mysqli_error());
}

$password="631711";
$hashedpass=password_hash($password, PASSWORD_DEFAULT);
$sql ="INSERT  INTO STUDENT". "(Roll_No,Name,Dept,Sem,hashed_pass,credit_m,gender,dob,contact,email)". "VALUES(101640,'Naeem Patel','Computer',5,'$hashedpass',2000,'Male','31/07/1998',9967139763,'naeempatel010@gmail.com')";
$fire_query=mysqli_query($conn,$sql);
if(!$fire_query){
	die('could not enter data' .mysqli_error($conn))		;
}

echo "data entered successfully";

mysqli_close($conn);

?>