<?php
session_start();
if(!empty($_SESSION["user_id"]) && !empty($_SESSION["user_name"])) {
    
    $u_last_login= $_SESSION['last_login_dt'];
    $u_id =$_SESSION['user_id'];
    $u_name=$_SESSION['user_name'];



?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodePanda cms</title>
    <meta name="description" content="">
   
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"/>
     <link rel="stylesheet" href="../css/dash.css">
     <link rel="stylesheet" href="../css/user_dash.css">

    <script>
      
  //  Counter Js 

  $('.counter').counterUp({
      delay: 10,
      time: 1000
  });
    </script>

</head>

<body>

    <section class="nav-bar">
              <p class="dash-nav">CodePanda<sub>cms</sub></p>
       
        
    </section>
    <section class="ud-content">
        <div class="row">
            <div class="col-md-3 col-lg-3">
             <?php include'../user/user_side_menu.php' ?>
            </div>
            <div class="col-md-9 col-lg-9">
                 <div class="row ud-con">
                    
                        <div class="ud-con-d">
                        
                        <h1>Total available certificate: <span class="counter">0</span></h1>
                        


                        </div>
               


                    
                        <div class="ud-con-d">
                        <h1>Build and share your Resume.</h1>
                        <a href="" class="btn btn-outline-primary ">Get Started now</a>
                        </div>
                     

                
                     <div class="ud-con-d">
                        <h1>Notification</h1>
                        <a href="" class="btn btn-outline-primary">show</a>
                        </div>
                  
                     
                        <div class="ud-con-d">
                        <h1>Access tutorial and get certified</h1>
                        <a href="" class="btn btn-outline-primary">Access site</a>
                        </div>
                        
                        <div class="ud-con-d">
                        <h1>Help and Support</h1>
                        <a href="" class="btn btn-outline-primary">send message to administrator.</a>
                        </div>
                    
                        
                        <div class="ud-con-d">
                        <h1>Send message to Company</h1>
                        <a href="" class="btn btn-outline-primary">compose message</a>
                        </div>
                
                </div>
            </div>
            </div>
        </div>
    </section>
 
    <footer style="background-color:#808080;padding:10px;font-family:Helvetica, sans-serif;">
        <div class="container">
            <h6 class="white">Copyright &copy 2019 CodePanda, Bhopal.</h6>
            <h6 class="last_login">Last Login: <?php echo $u_last_login ?></h6>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/jquery.min.js" ></script>
    <script src="../bootstrap/popper.min.js" ></script>
    <script src="../bootstrap/bootstrap.min.js" ></script>
    <script src="../js/counterup.min.js"></script>
</body>

</html>


<?php
}
 else {
    header("Location: ../error.php");
}
?>