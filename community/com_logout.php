<?php 
session_start();
$_SESSION["com_id"] = "";
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .log{
            margin-top:10%;
            
        }

        .log_icon{
            height:100px;
            width:100px;
        }
        .text{
            font-size:18px;
            color:grey;

        }
        </style>

</head>
<body>
    <center>
        <div class="log">
        <img class="log_icon" src="../icon/procr.gif">
        <p class="text">Hold On while we logging you out.</p>
        </div>
    </center>
</body>
</html>
<?php
header("refresh:5;url=../console.php"); 
?>