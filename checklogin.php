<!--ADMINLOGIN CHECK -->
<html>
<body style="background-color:antiquewhite; background-size:cover;">
<?php
$name=$_POST["n"];
$pass=$_POST["p"];
$con=mysqli_connect("localhost","root","","ebooks");
$r=mysqli_query($con,"select * from admin_login where username='$name' and password='$pass'");
if($row=mysqli_fetch_array($r))
  header("location:adpview.php");
else
  echo"<h1> <center> invalid username and password </center> </h1>";
?>
</body>
</html>