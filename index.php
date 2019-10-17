<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodePanda cms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
 

    <style>
        .white {
            color: white;
            font-family: sans-serif;
            font-weight: 600px;
        }
        
        .content-margin {
            margin-top: 100px;
        }
        
        .content {
            background: linear-gradient(to right, #116D9B 10%, #BE3167 100%);
            height: 600px;
            width: 100%;
            font-family: sans-serif;
        }
        
        @media only screen and (max-width: 600px) {
            .content-margin {
                margin-top: 20px;
            }
            .content {
                height: 800px;
                font-family: cursive;
                background-attachment: fixed;
            }
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
                <div class="col-md-5">
                    <div class="content-margin">
                        <img src="image/cv.png" height="300px" width="90%" />
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="content-margin">
                        <h1 class="white">Why Certification required ?
                            <h1>

                                <h3 class="white">
                                    <ul>
                                        <li>To get industry oriented Knowledge.</li>
                                        <li>To get placed in reputed company.</li>
                                        <li>To get Higher Salary.</li>
                                        <li>And Easily access your certificate from across the world.</li>
                                    </ul>
                                </h3>


                                <center> <button class="btn btn-lg" data-toggle="modal" data-target="#exampleModal" style="border-radius:10px 10px 0px; background-color:rgba(206,206,0,0.5)">Register User</button>
                                </center>

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
                    <h5 class="modal-title" id="exampleModalLabel">Registration &nbsp &nbsp
                        <img src="image/register.png" height="20px " width="20px">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>

                
                <div class="modal-body">
                    <form method="POST" action="process/user_register_pro.php">
                        <div class="form-row">
                            <div class="col form-group">
                                <label>First name </label>
                                <input type="text" class="form-control" placeholder="eg: Raj" name="fname">
                            </div>
                            <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" placeholder="eg: Kumar" name="lname">
                            </div>
                            <!-- form-group end.// -->
                        </div>
                        <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="eg: srk@gmail.com" name="email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" placeholder="eg: 8123567899" name="mobile">
                            <small class="form-text text-muted">only enter 10 digit mobile no.</small>
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Gender</label>
                            <label class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" value="male">
                                      <span class="form-check-label"> Male </span>
                                    </label>
                            <label class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" value="female">
                                      <span class="form-check-label"> Female</span>
                                    </label>
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-row">
                           
                           
                            <div class="form-group col-md-6">
                                <label>City</label>
                              <select name="city" class="form-control" required>
                                <option>Choose...</option>
                                    <option value="Bhopal"> Bhopal</option>
                                       <option value="Patna">Patna</option>
                                          <option value="Delhi">Delhi</option>
                                             <option value="Bengluru">Bengaluru</option>
                              </select>
                            </div>
                           <div class="form-group col-md-6">
                                <label>Country</label>
                              <select name="country" class="form-control" required>
                                <option>Choose...</option>
                                    <option value="India">India</option>
                                    
                              </select>
                            </div>
                          </div>
                        <div class="form-group">
                            <label>Choose password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                         <div class="form-group">
                            <label>Confirm password</label>
                            <input class="form-control" type="password" name="password">
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