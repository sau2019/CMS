

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>
        
    </style>
</head>
<body>
    

<?php

require('../process/connection.php');

$sqlcertq= "SELECT * from certificate_list WHERE cert_comp_id=$c_id ";

$result = mysqli_query($conn, $sqlcertq);

if (mysqli_num_rows($result)>0){


     ?>

     <table class=" table table-hover">
         <tr class="" style="background-color:grey;color:#fff;border-radius:10px;">
         <th>certificate Title</th><th>Certficate Id</th><th>User Name</th><th>User Email</th><th>Make Changes</th><th>Preview</th>
        </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";

        echo "<td>".$row['cert_title']."</td>";
        echo "<td>".$row['cert_id']."</td>";
        echo "<td>".$row['cert_person']."</td>";
        echo "<td>";

?>
<form action="mail_update_success.php" method="POST">
<input type="text" name="u_mail" value="<?php echo $row['user_email'] ?>" />
<input type="text" name="cert_id" value="<?php echo $row['cert_id'] ?>" hidden/>
<input type="submit" value="Update"/>
</form>

<?php      
       echo "</td>";
       echo "<td> <button class='btn btn-danger btn-sm'>Edit</button></td>";
        echo"<td><a href='preview_certificate.php'><button class='btn btn-primary btn-sm'>view</button></a></td>";
        echo "</tr>";
   
    }
?>
</table>
<?
}
else{
        echo '<center><h1>You have not generated any certificate yet.</h1></center>';
}

mysqli_close($conn);
?>

</body>
</html>
