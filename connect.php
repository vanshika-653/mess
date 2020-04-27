<?php
if(isset($_POST['btnsubmit']))
{
	$username=$_POST['$username'];
	$password=$_POST['password'];
     $conn=mysqli_connect('localhost','root','','zeal');
     $res=mysqli_query($conn,"insert into login(username,password)values('$username','$password')");
     if(mysqli_affected_rows($conn))
     {
     	echo"<script>window.location='login.html'</script>";
     }
     else
     {
     	echo "<h4 style='color:white;'> Data is not Successfully inserted</h4>";
     }
}
 ?>