<!-- BOOK CATRGORY FORM -->
<html>
<body style="background:url(bgs/bg10.jpg); background-size:cover;">
    <form action='bcnext.php' method='post' enctype='multipart/form-data'>
        <table border='2' align='center' width='50%' cellspacing=0 cellpadding=10>
            <tr>
                <th colspan='2'>
                    <font size='5'> BOOK CATEGORY FORM </font>
                </th>
            </tr>
            <tr>
                <td> <b> book category </b> </td>
                <td> 
                    
                <input type="text" name="bk" class="form-control">
                 </td>
            </tr>
            <tr>
                <td> <b> book photo</b> </td>
                <td> <input type='file' name='ph' required> </td>
            </tr>
            <tr>
                <td colspan='2' align='center'> <input type='submit' value='SUBMIT'>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>