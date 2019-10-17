<?php
session_start();
if(!empty($_SESSION["com_id"]) && !empty($_SESSION["com_name"])) {

?>
<center>
<h2 style="color:dodgerblue;font-size:18px;margin-top:10%">You are already Login. <br>Taking you to the console panel.............</h2>
<img src="icon/procr.gif"height="150px" width="150px"/>
</center>
<?php

    header("refresh:2;url=/certification/community/com_dash.php"); 
}
else{


?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
     <link href="css/login.css" rel="stylesheet">
   
</head>

<body>
<div class="container">
<?php include'nav_bar.php'?>
</div>



    <section class="per-login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <center>
                        <img src="image/certificate.png" class="cer_img">
                    </center>

                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 ">
                    <center>
                      
                
                                    <form class="form" method="POST" action="process/com_login_pro.php">
                                          <h2>Community or Organisation Login</h2>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="username" name="com_username">

                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="password" name="com_password">
                                        </div>
                                   
                                     
                                            <input type="submit" value="Login" class="btn btn-outline-danger">
                                        
                                        <a href="">Forgot Password?</a><br>
                                          Don't have a acoount<a href="">&nbspSignUp</a>
                                    </form>
                                
           

                </center>


            </div>
        </div>

    </section>

    <footer style="background-color:#808080;padding:10px;font-family:Helvetica, sans-serif;">
        <div class="container">
            <h6 class="white">Copyright &copy 2019 CodePanda, Bhopal</h6>

        </div>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery.min.js" ></script>
    <script src="bootstrap/popper.min.js" ></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
    
    <script src="https://use.fontawesome.com/70ac4eceae.js"></script>
</body>

</html>

<?php
}
?>