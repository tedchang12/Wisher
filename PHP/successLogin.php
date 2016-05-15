<?
session_start();
include("PHP\sqlconnect.php");
include("PHP\login.php");
include("PHP\Register.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wisher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/temp.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui-pro.min.js"></script>
    <style>
    .img11 {
    position: relative;
    width:100%;
    height:100%;
    z-index:-1;
}
    .formVar{
      position: absolute;
      top:200px;
      left:40%;
    }


    </style>
  </head>
  
  <body bgcolor="black">
<nav class="navbar navbar-default navbar-fixed-top" id = "navBar" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand active" href="./index.php">Wisher</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar-collapse-01">
    <ul class="nav navbar-nav">
      <li class="active"><a href="./wish.php">Make a wish</a></li>
      <li><a href="./complete.php">Complete</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right " align= "right">
      <button class="btn btn-primary navbar-btn logg">Login</button>
      <button class="btn btn-primary navbar-btn ssign">Register</button>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->




​



<script>





</script>
  </body>
</html>
