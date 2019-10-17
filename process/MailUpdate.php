
<?php

MailUpdate::Mail_Update($cert_id,$u_mail);


class MailUpdate{

public static function Mail_Update($ce_id,$email){


      $ce_id=$ce_id;
      $email=$email;
      require'../process/connection.php';

        $sqlemail="UPDATE certificate_list set user_email='$email' WHERE cert_id=$ce_id ";
        
        if(mysqli_query($conn,$sqlemail))
        {
            echo '<h1>Customer mail id updated successfully</h1>';
        }
        else{
            echo 'Not updated due to'.mysqli_error($conn)."<br>";
        }
        mysqli_close($conn);
}

}

?>