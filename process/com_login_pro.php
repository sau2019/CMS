
<!DOCTYPE html>
<html>
<head>
	<title>Page Redirect</title>
	<style>
		.cd_time{
            margin-top:2%;
            color:dodgerblue;
            font-size:20px;
        }
        #counter{
            font-size:100px;
            color:#CA204A;
            text-shadow:4px 4px 4px grey;
        }
        
        .proc{
            height:200px;
            width:200px;
            margin-top:5%;
        }
	</style>
</head>
   
<body class="body">

<?php


    $c_user=$_POST['com_username'];
    $c_pass=$_POST['com_password'];

    include'../process/connection.php';

    $sqlquery = "SELECT com_id,com_name  from com_register WHERE com_email='$c_user' AND com_password='$c_pass' ";
    $result = mysqli_query($conn, $sqlquery);

    if (mysqli_num_rows($result)>0) {
        
        
        while($row = mysqli_fetch_assoc($result)) {

            /*
            echo "Userid: ".$row['com_id']."   Company Name: " . $row['com_name']. "<br>";
                */
                
                session_start();
                
                $_SESSION['com_id']=$row['com_id'];
                $_SESSION['com_name']=$row['com_name'];
                echo $_SESSION['com_id'];
                
                $client_id=$row['com_id'];
               
                include'../process/ret_comp_login_dt.php';
                include'../process/client_log_save.php';

?>

<center>
<img class="proc" src="../icon/proc.gif" >
<div class="cd_time">

<h4>Processing...<!-- <span id="counter">5</span> second.</h4> -->
</div>

</center>





<script type="text/javascript">
/*
function countdown() {
    var i = document.getElementById('counter');
   
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){ countdown(); },1000);
*/
</script>



<?php

                header("refresh:5;url=../community/com_dash.php"); 



        }

    }
    else {
        echo "Please Login again, Either you have entered the wrong userid or password";
    }

    mysqli_close($conn);
?>
</body>
</html>