<!-- CATEGORY VIEW -->
<html>
	<body style="background-color:antiquewhite; background-size:cover;">
<?php
$con = mysqli_connect("localhost", "root", "", "ebooks");

$r = mysqli_query($con, "select * from category");

echo "<table border='1' align='center' cellspacing='0' cellpadding='10' height='15%' width='50%'>";
echo "<tr>
       <th> id </th>
	    <th> b_category </th>
       <th> b_photo </th>
	   <th> delete </th>
     </tr>";

while ($row = mysqli_fetch_array($r)) {

    echo "<tr>
		      <td>$row[0]</td>
			  <td>$row[1]</td>
			  <td><img src='cphoto/$row[2]' alt='No Image' 'width='10px' height='120px' align='center'></td>
	          <td><a href='catedelete.php?a=$row[0]'>Delete</a></td>	
			  </tr>";
}

echo "</table>";
?>
</body>
</html>