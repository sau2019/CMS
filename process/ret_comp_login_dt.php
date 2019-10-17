 
 <?php
   require('../process/UserInfo.php');
   require('../process/connection.php');

 $sqlquery = "SELECT client_login_dt from client_log WHERE client_id='$client_id' ORDER BY client_login_dt";
$result1 = mysqli_query($conn, $sqlquery);
if (mysqli_num_rows($result1)>0) {
        

    while($row = mysqli_fetch_assoc($result1)) {

    $last_login_dt=$row['client_login_dt'];
  
    }
    echo "Last login :".$last_login_dt;
    $_SESSION['comp_last_login_dt']=$last_login_dt;
}
else{
  $_SESSION['comp_last_login_dt']='retreiving';
}
   
   ?>