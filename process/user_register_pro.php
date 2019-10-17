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

	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$pass=$_POST['password'];

	include'../process/connection.php';

	$sql = "INSERT INTO user_register (firstname, lastname, email, mobile, gender, city, country, password)
	VALUES ('$f_name', '$l_name','$email', '$mobile', '$gender', '$city', '$country', '$pass')";


	if (mysqli_query($conn, $sql)) {
	
?>



<center>
<div class="cd_time">
    <h2 style="color:dodgerblue">Thanks for Registering with us.....</h2><br>
<h4>You will be redirected to certification page in <span id="counter" style="color:dodgerblue; font-size:25px">5</span> second.</h4>
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
    

	header("refresh:5;url=../login.php"); 
	exit();
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

</body>
</html>