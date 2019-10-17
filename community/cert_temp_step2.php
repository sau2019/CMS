<?php
session_start();
if(!empty($_SESSION["com_id"]) && !empty($_SESSION["com_name"])) {

        $c_last_login=$_SESSION['comp_last_login_dt'];
        $c_id=$_SESSION['com_id'];
        $c_name=$_SESSION['com_name'];
        $cert_title=$_POST['cert_catogery'];
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
  

              .form_back{
                  height:95%;
                  width:100%;
                  background:url('../cert_template/border.png'); 
                    background-repeat:no-repeat;
                    background-size:100%;
                    padding:1px;
                    border:2px solid grey;
                    border-radius:10px;
                    background-color:#fff;
                    overflow:hidden;
              }
              .content-back{
                  height:750px;
                  width:100%;
                padding:2px;
                 
                 
              }
              .form-group{
                  padding:10px;
                  width:100%;
              }
              .cert_title{
                font-family:Yu Gothic UI;
                margin-top:60px;
                border:none;
                font-size:34px;
                background:transparent;
                  padding:10px;
                  color:blue;
                  text-transform: uppercase;
                  width:90%;
                  text-align:center;
                  text-shadow: 2px 2px 2px black, 3px 3px 3px black;
              }
              .cert_title:hover{
                  font-size:40px;
                  background-color:rgba(0,0,0,0.2);
              }
              .awarded_to{
             
                margin-top:10px;
                border:none;
                font-size:18px;
                background:transparent;
                  padding:5px;
                  color:red;
                 
                  text-transform:capitalize;
                  width:90%;
                  text-align:center;
                  font-family:Impact,'Arial Narrow Bold', sans-serif;
            
              }
              .awarded_to:hover{
                font-size:25px;
                background-color:rgba(0,0,0,0.2);
              }
             .cert_person{
                 
                margin-top:-20px;
                font-family:Impact,'Arial Narrow Bold', sans-serif;
         
                border:none;
                font-size:24px;
                background:transparent;
                  padding:2px;
                  color:blue;
                  text-transform:uppercase;
                  width:90%;
                  text-align:center;
                  text-shadow:2px 2px 2px red,2px 2px 2px grey;
                
             }
             .cert_person:hover{
                font-size:30px;
                background-color:rgba(0,0,0,0.2);
             
             }
             .award_for{
                  
                margin-top:-20px;
                font-family:Impact,'Arial Narrow Bold', sans-serif;
                border:none;
                font-size:18px;
                background-color:transparent;
                  padding:10px;
                  color:dodgerblue;
                  text-transform:initial;
                  width:95%;
                  text-align:center;
                  border-left:10px solid dodgerblue;
                  text-shadow: 1px 1px 1px grey, 1px 1px 1px grey;
          
             }
             .award_for:hover{
                 font-size:25px;
                 background:rgba(0,0,0,0.1);
             }
             .cert_date{
              color:red;
              background-color:transparent;
              border:none;
              font-size:18px;

             }
             .cert_date:hover{
              font-size:25px;
              background:rgba(0,0,0,0.2);
              
             }
             .form-group span{
                 font-size:18px;
                 color:blue;
             }

             .cert_issue{
                 margin-top:110px;
                 margin-left:100px;
                 color:red;
                 background-color:transparent;
                 border:none;
                
             }
            
             .cert_issue input[type="date"]{
                 color:red;
                 font-size:18px;
                 border:none;
             }
             .cert_issue input[type="date"]:hover{
                 font-size:25px;
                 background-color:rgba(0,0,0,0.2);
             }

             
             .seal_sign{
                 float:right;
                 margin-top:-40px;
                 overflow: hidden;
                 margin-right:100px;
                 color:red;
                 display:border-box;
                 text-align:center;
             }
             .seal_sign p{
                 color:black;
             }
             .cms_logo{
                 
                 margin-top:53px;
                 font-size:14px;
                 float:right;
                 color:#fff;
                 margin-right:-26%;
             }
             .btn-primary{
          
                display:border-box;
                width:10%;
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
                    
                    <h1>Step:2  </h1>
                  
                    <h1>Customize your certification Template</h1>

                    </div>

                    <div class="content-back">

                    <form class="form_back" action="cert_text_step3.php" method="POST" >
                 
                        <center>
                            <div class="form-group">
                              
                                <input class="cert_title" type="text" name="cert_title" value="<?php echo $cert_title ?>"/>
                              
                            </div>
                            
                            <div class="form-group">
                                <input class="awarded_to" type="text" name="awarded_to" value="Awarded to"/>
                            </div>

                            <div class="form-group">
                                <input class="cert_person" type="text" name="cert_person" value="saurabh ranjan kumar"/>
                            </div>

                            <div class="form-group">
                                <input class="award_for" type="text" name="cert_for" value="For Completing Internship as a web Developer from Pa Say Webscript Technologies Pvt Ltd." maxlength="100"/>
                            </div>

                            <?php 
                            
                            if($cert_title=="Certificate of Completion")
                            {
                            ?>

                            <div class="form-group">
                                <span>From</span>
                                <input class="cert_date" type="date" name="cert_from" required/>
                                <span>To</span>
                                <input class="cert_date" type="date" name="cert_to" required/>
                            </div>
                            <?php
                            }
                            elseif($cert_title=="Certificate of Selection"){
                            ?>

                            
                            <div class="form-group">
                                <input class="cert_date" type="text" name="" value="We wish him a bright future." maxlength="100"/>
                            </div>


                            <?php

                            }
                            ?>
                           

                        </center>
                        <div class="form-group cert_issue">
                                <span>Certification Date:</span>
                                <input type="date" name="cert_date"/>
                            </div>
                        <div class="seal_sign"><span>Company Seal & Sign</span>
                        <p ><?php echo $c_name?></p>
                            
                        </div>
                        <div class="cms_logo">
                            <p><b>CodePanda<sub>cms</sub></b></p>
                        </div>

                        <button class="btn btn-primary" > Save</button>
                 
                     </form>
                  
              
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