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

	
        //getting value from POST method
        $cert_title=$_POST['cert_title'];
        $awarded_to=$_POST['awarded_to'];
        $cert_person=$_POST['cert_person'];
        $cert_for=$_POST['cert_for'];
        $cert_from=$_POST['cert_from'];
        $cert_to=$_POST['cert_to'];
        $cert_date=$_POST['cert_date'];
        $cert_seal_sign=$c_name;
        $cert_comp_id=$c_id;

	include'../process/connection.php';

	$sqlcert = "INSERT INTO certificate_list (cert_comp_id, cert_title, awarded_to, cert_person, cert_for, cert_from, cert_to, cert_date,cert_seal_sign)
	VALUES ($cert_comp_id,'$cert_title','$awarded_to','$cert_person','$cert_for','$cert_from','$cert_to','$cert_date','$cert_seal_sign')";


	if (mysqli_query($conn, $sqlcert)) {
	
?>




<center>
<img class="proc" src="../icon/procs.gif" >
<div class="cd_time">

<h4>Processing...<!-- <span id="counter">5</span> second.</h4> -->
</div>

</center>


<?php
    

	header("refresh:5;url=../community/certificate_saved.php"); 
	exit();
	} 
	else {
		echo "Error: " . $sqlcert . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

</body>
</html>
