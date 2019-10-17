<!DOCTYPE html>
<html>
<head>
	<title>Page Redirect</title>
	<style>
		.cd_time{
			margin-top:10%;
		}
	</style>
</head>
<body>


<?php

	$c_name=$_POST['com_name'];
	$c_cin=$_POST['com_cin'];
	$c_add=$_POST['com_add'];
	$c_email=$_POST['com_email'];
	$c_mob=$_POST['com_mob'];
	$c_city=$_POST['com_city'];
	$c_country=$_POST['com_country'];
	$c_pass=$_POST['com_password'];


	include'../process/connection.php';



	$sql = "INSERT INTO com_register (com_name, com_cin, com_address, com_email, com_mobile, com_city, com_country, com_password )
	VALUES ('$c_name', '$c_cin','$c_add','$c_email', '$c_mob', '$c_city', '$c_country','$c_pass')";


	if (mysqli_query($conn, $sql)) {
		
   
?>



<center>
<div class="cd_time">
    <h2 style="color:dodgerblue">Thanks for Registering with us.....</h2><br>
<h4>You will be redirected to company console page in <span id="counter" style="color:dodgerblue; font-size:25px">5</span> second.</h4>
</div>
</center>


<script type="text/javascript">
	function countdown() {
		var i = document.getElementById('counter');
	
	if (parseInt(i.innerHTML)!=0) {
		i.innerHTML = parseInt(i.innerHTML)-1;
	}
	}
	setInterval(function(){ countdown(); },1000);
	</script>


<?php
	header("refresh:5;url=../console.php"); 
	exit();
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

</body>
</html>