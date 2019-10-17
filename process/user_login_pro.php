
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
<body>
<?php
   


    $u_user=$_POST['u_username'];
    $u_pass=$_POST['u_password'];

    include'../process/connection.php';

    $sqlquery = "SELECT user_id,firstname, lastname from user_register WHERE email='$u_user' AND password='$u_pass' ";
    $result = mysqli_query($conn, $sqlquery);
    
    if (mysqli_num_rows($result)>0) {
        

        while($row = mysqli_fetch_assoc($result)) {

            /*
            echo "Userid: ".$row['user_id']."   Fullname: " . $row['firstname']. " " . $row['lastname']. "<br>";
               */ 

                session_start();
                
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_name']=$row['firstname'];
                echo $_SESSION['user_id'];

                $client_id=$row['user_id'];
               
                include'../process/retrieve_login_dt.php';
                include'../process/client_log_save.php';
?>

<!--


<center>
<div class="cd_time">
<h4>Processing....... <span id="counter">5</span> second.</h4>
</div>
</center>

-->

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



 header("refresh:5;url=../user/user_dash.php"); 
        }

    }
    else {
        echo "Please Login again, Either you have entered the wrong userid or password";
    }

    mysqli_close($conn);
?>
</body>
</html>