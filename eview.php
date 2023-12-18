<!-- UPLOADED BOOKS DISPLAY -->
<html>
	<body style="background-color:antiquewhite; background-size:cover;">
<?php
$con=mysqli_connect("localhost","root","","ebooks");

$r=mysqli_query($con,"select * from addbook");

echo "<table border='1' align='center' cellspacing='0' cellpadding='10' height='15%' width='50%'>";
echo"<tr>
     <th> id </th>
	 <th> b_category </th>
	 <th> b_title </th>
	 <th> b_photo </th>
	 <th> b_descrip </th>
	 <th> b_upload </th>
	 <th> Delete</th>
	 <th> Update</th>
	 </tr>";
     
     
	 while($row=mysqli_fetch_array($r))
	 {
        
		 echo"<tr>
		      <td>$row[0]</td>
			  <td>$row[1]</td>
			  <td>$row[2]</td>
			  <td><img src='photos/$row[3]' alt='No Image' 'width='10px' height='120px' align='center'></td>
			  <td>$row[4]</td>
			  <td>$row[5]</td>
			  <td><a href='edelete.php?a=$row[0]'>Delete</a></td>
			  <td><a href='eedit.php?a=$row[0]'>Update</a></td>
			  </tr>";
	 }
echo "</table>";
?>
</body>
</html>