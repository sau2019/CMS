<?php
session_start();
if(!empty($_SESSION["com_id"]) && !empty($_SESSION["com_name"])) {

        $c_last_login=$_SESSION['comp_last_login_dt'];
        $c_id=$_SESSION['com_id'];
        $c_name=$_SESSION['com_name'];
        $cert_title='';
?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodePanda cms</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"/>

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
                 float:left;
                
             }

            
             .cert_issue input[type="date"]{
                 color:dodgerblue;
                 font-size:18px;
                 border:none;
             }
             .cert_issue input[type="date"]:hover{
                 font-size:25px;
                 background-color:rgba(0,0,0,0.2);
             }

             .btn-submit{
                margin-top:11%;
                position:-webkit-sticky;
                position: sticky;
                width:10%;
             }
             .seal_sign{
                 float:right;
                 margin-top:110px;
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
                 
                 margin-top:200px;
                 font-size:14px;
                
                 margin-right:-25%;
                 color:#fff;
                 float:right;
                
             }

             .size{
               
                  height:790px;
                  width:1000px;
                  padding:0px;            
        
             }
           
    </style>
</head>

<body>
<div id="printableArea">
     

    <center>
      <div class="container">
          <div class="size">
                 <div class="content-back">

                    <form class="form_back" action="cert_text_step3.php" method="POST" >
                        <center>
                            <div class="form-group">
                              
                                <input class="cert_title" type="text" name="cert_title" value="certificate of completion"/>
                              
                            </div>
                            
                            <div class="form-group">
                                <input class="awarded_to" type="text" name="cert_person" value="Awarded to"/>
                            </div>

                            <div class="form-group">
                                <input class="cert_person" type="text" name="cert_person" value="saurabh ranjan kumar"/>
                            </div>

                            <div class="form-group">
                                <input class="award_for" type="text" name="cert_for" value="For Completing Internship as a web Developer from Pa Say Webscript Technologies Pvt Ltd." maxlength="100"/>
                            </div>

                            <div class="form-group">
                                <span>From</span>
                                <input class="cert_date" type="date" name="cert_from" required/>
                                <span>To</span>
                                <input class="cert_date" type="date" name="cert_to" required/>
                            </div>
                         

                        </center>
                        <div class="cert_issue">
                                <span>Certification Date:</span>
                                <input type="date" name="cert_date"/>
                            </div>
                        <div class="seal_sign"><span>Company Seal & Sign</span>
                        <p ><?php echo $c_name?></p>
                            
                        </div>
                        <div class="cms_logo">
                            <p><b>CodePanda<sub>cms</sub></b></p>
                        </div>
                    </form>
              </div>
                   
                    
                  
            
            </div>
         
        </div>
        </div>
    </center>
    </div>
    <input type="button" onclick="printDiv('printableArea')" class="btn btn-primary" value="print Certificate"/> 
  <script>


    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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