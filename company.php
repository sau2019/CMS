<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodePanda cms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/><style>
        .white {
            color: white;
            font-family: sans-serif;
            font-weight: 600px;
        }
        
        .content-margin {
            margin-top: 25%;
        }
        
        .content {
            background: linear-gradient(to right, #116D9B 10%, #BE3167 100%);
            height: 600px;
            width: 100%;
            color:#fff;
            font-family: sans-serif;

        }
        .content h1{
             font-size:24px;
        }
       
        
        
        @media only screen and (max-width: 600px) {
            .content-margin {
                margin-top: 60px;
              
            }
            .content {
                height: 500px;
                font-family:sans-serif;
                background-attachment: fixed;
            }
            .com-img{
                visibility:collapse;
            }
            
        }

        .com-img{
            border:4px solid gold;
             border-radius:10px; 
           
             float:right;
             margin-top:10px;
             position:relative;
             height:200px;
             width:90%;
        }
        .nav-item{
            padding:3px 7px;
        }
     
    </style>
</head>

<body>
<div class="container">
<?php include'nav_bar.php'?>
</div>
    <div class="content">
        <div class="container">
            <div class="row">
                 <div class="col-md-7">
                    <div class="content-margin">
                        <h1 class="white">Register your Organisation or Company or Community?</h1>
                         

                                <p class="white">
                                    <ul>
                                        <li>Choose your custom template for certification.</li>
                                        <li>Easy to manage certificate.</li>
                                        <li>Attract more customer from across the world.</li>
                                        <li>Advance Certificate managing technique has been introduced.</li>
                                    </ul>
                                </p>


                                <center> <button class="btn btn-lg" data-toggle="modal" data-target="#exampleModal" style="border-radius:10px 10px 0px; background-color:rgba(206,206,0,0.5)">Register Now</button>
                                  
                                </center>

                    </div>

                </div>
              
                <div class="col-md-5">
                    <div class="content-margin">
                        <img class="com-img" src="image/r1.png" />

                    </div>



                </div>
               
            </div>

        </div>

    </div>
    <footer style="background-color:#808080;padding:10px;font-family:Helvetica, sans-serif;">
        <div class="container">
            <h6 class="white">Copyright &copy 2019 CodePanda, Bhopal.</h6>
        </div>


    </footer>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="color:#fff;background-color:#B63369">
                    <h5 class="modal-title" id="exampleModalLabel">Organisation Registration &nbsp &nbsp
                        <img src="image/register.png" height="20px " width="20px">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="process/com_register_pro.php">
                         <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" placeholder="eg: codepanda" name="com_name" required>
                          
                        </div>
                        <div class="form-group">
                            <label>CIN No.</label>
                            <input type="text" class="form-control" name="com_cin" >
                          
                        </div>
                          <div class="form-group">
                            <label>Office Address</label>
                            <textarea name="com_add"  style="height:50px; width:100%;" row="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="eg: srk@gmail.com" name="com_email" required>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" placeholder="eg: 8123567899" name="com_mob">
                            <small class="form-text text-muted">only enter 10 digit mobile no.</small>
                        </div>
                  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                              <select name="com_city" class="form-control" required>
                                <option>Choose...</option>
                                    <option value="Bhopal">Bhopal</option>
                                       <option value="Patna">Patna</option>
                                          <option value="Delhi">Delhi</option>
                                             <option value="Benguluru">Bengaluru</option>
                              </select>
                            </div>
                            <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <select  class="form-control" name="com_country">
                                        <option> Choose...</option>
                                          <option value="india">India</option>
                                         
                                      </select>
                            </div>
                      
                        </div>
                     
                        <div class="form-group">
                            <label>Choose password</label>
                            <input class="form-control" type="password" name="com_password">
                        </div>
                         <div class="form-group">
                            <label>Confirm password</label>
                            <input class="form-control" type="password" name="com_password1">
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-block"> Register  </button>
                        </div>
                        <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Register' button, you confirm that you accept our <br> <a href="about.php?#terms">Terms of use</a> and <a href="#">Privacy Policy</a>.</small>
                    </form>
                </div>
                <div class="modal-footer" style="color:#fff;background-color:#B63369">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery.min.js" ></script>
    <script src="bootstrap/popper.min.js" ></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
</body>

</html>