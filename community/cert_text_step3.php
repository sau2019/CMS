<?php
session_start();
if(!empty($_SESSION["com_id"]) && !empty($_SESSION["com_name"])) {

        $c_last_login=$_SESSION['comp_last_login_dt'];
        $c_id=$_SESSION['com_id'];
        $c_name=$_SESSION['com_name'];


?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodePanda cms</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/dash.css">
    <link rel="stylesheet" href="../css/com_dash.css">
    <style>

        .con{
            color:#fff;
        }
     
     .option{
         padding:20px;
         color:#fff;
         background-color:black;
         
              }
    </style>
</head>

<body>
    <section class="nav-bar">
              <p class="dash-nav">CodePanda<sub>cms</sub></p>
          
    </section>
    <section class="ud-content">
        <div class="row">
            <div class="col-md-3 col-lg-3">
            <?php include'../community/menu_icon_side.php' ?>


            </div>
            <div class="col-md-9 col-lg-9">
            <div class="row ud-con">
                    
                    <div class="ud-con-d">
                        <div style="padding:50px;">
                       <?php include'../process/certificate_final_save.php'?>
                        </div>
            </div>
            </div>
        </div>
    </section>
 
    <footer style="background-color:#808080;padding:10px;font-family:Helvetica, sans-serif;">
        <div class="container">
            <h6 class="white">Copyright &copy 2019 CodePanda, Bhopal.</h6>
            <h6 class="last_login">Last Login: <?php echo $c_last_login ?></h6>

        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/jquery.min.js" ></script>
    <script src="../bootstrap/popper.min.js" ></script>
    <script src="../bootstrap/bootstrap.min.js" ></script>
</body>

</html>


<?php
}
 else {
    header("Location: ../error.php");
}
?>