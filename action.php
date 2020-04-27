<?php
$username=$_POST['username'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
$repeat=$_POST['repeat'];

if(!empty($username)|| !empty($number)|| !empty($email)||!empty($password)||!empty($repeat)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "mess";
$conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(mysqli_connect_error){
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, number, email, password, repeat) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sisss", $name, $number, $email, $psw, $repeat);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>