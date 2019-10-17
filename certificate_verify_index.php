<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verify Certificate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,fit-to-shrink=no">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/><style>
     .nav-item{
            padding:3px 7px;
        }
        
        .input-group-prepend span {
            width: 50px;
            background-color: #F1592A;
            color: black;
            border: 0 !important;
        }
        
        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;
        }
  .input-group .options{

padding:20px;
background-color:grey;
color:#fff;
  }
  h3{
      font-size:20px;
  }
  p{
      font-size:12px;
  }
  .white {
            color: white;
            font-family: sans-serif;
            font-weight: 600px;
        }
    .con_img{
        height:300px;
        width:90%;
        align:center;
        padding:10px;
        margin-top:80px;
    }
    @media only screen and (max-width: 600px) {
            .con_img{
                display:none;
                
            }
        }
        input[type='text']{
            border-radius:10px 0 0 10px;
            padding:20px;

            height:30px;

        }
        input[type='text']:focus{
           border:2px solid red;
           background-color:black;
           color:#fff;

        }
       
    </style>
</head>

<body>
<div class="container">
<?php include'nav_bar.php'?>
</div>



       <div style="background-color:#fff;font-family:Arial, Helvetica, sans-serif;background-size:100%;background-repeat:no-repeat;" >
        <div class="container">
        <div class="row" style="height:520px;width:100%">
            <div class="col-md-7 col-sm-7">
                <img src="image/hero-img.png" class="con_img">
    </div>
    <div class="col-md-5 col-sm-5">
       
     <div style="margin-top:20%;color:#FF8000;font-family:sans-serif;background:#535461;padding:20px;border-radius:10px ;width:100%" >    
    <form action="certificate_verify_index.php" method="post">
 
        <div style="padding:4px;margin-bottom:5px"></div>
        <h3>Enter Certification Number</h3>
        <div class="input-group form-group">
           
                                           
         <input type="text" onkeyup="showHint(this.value)" id="txt_cert_id" class="form-control" placeholder="eg: cp0123456">
                                          
        </div>
       
    </form>
    </div>
   
    </div>
           
       
    </div>
    </div>

</div>
    
    <div class="row" style="background-color:#fff;margin-bottom:10px">
    <div class="container" style="overflow-X:scroll;width:90%">    
        <table class="table table-hover table-striped" style="border:1px solid grey;">
            <tr class="thead thead-dark">
                <th>Name</th><th>Mobile no.</th><th>Email Id.</th><th>Document No.</th><th>View Details</th>
    </tr>
    <tr>
        <td>saurabh</td><td>8292475177</td><td>srkit28@gmail.com</td><td>pase04567</td><td><button class="btn btn-primary btn-sm">View</button></td>
    </tr>
    
    </table>
    </div>
    
    </div>
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
</body>

</html>