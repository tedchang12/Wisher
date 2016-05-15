<?

include("PHP\sqlconnect.php");
include("PHP\login.php");
include("PHP\Register.php");
include("ajax_php_file.php");
$fid=$_SESSION["fid"];
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
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui-pro.min.js"></script>
    <style>
 

    </style>
  </head>
  
<body  >
 
<?



?>





<div class="PDiv" style="display: -webkit-inline-box;">

<div class="pp"><br><br><br><br><br><br></div>



    <form id="signup" >

        <div class="header1">
            
            <h3 ><img src = "img/011.png" width ="50" height = "50"/> <font color="1ABC9C"><?echo $_SESSION["userid"];?></font>   </h3>
                      
        </div> 
        
        <div class="sep"></div>

        <div class="inputs1 login-form" >
        <?
        if(isset($_SESSION["facebookLog"]))
        {?>
         <img class = "fb-pic ProfileImg" src="https://graph.facebook.com/<?= $fid ?>/picture?type=large">
        <?}
        else
            {?>
        <img class = "ProfileImg" src="<?echo "web/".$_GET['srcimg'];?>"/>
        <?}
        ?>
        
        </div>
        <button class="btn btn-warning navbar-right btn-lg btn-block" type="submit">Follow</button> 



      </form>  
</div>
</div>
   <nav class="navbar navbar navbar-fixed-top" id = "navBar" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand active" href="./index.php">Wisher</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar-collapse-01">
    <ul class="nav navbar-nav">
      <li class="active uploadact"><a href="#">Make a wish</a></li>
      <li><a href=<?echo "profile.php?id=".$_SESSION["userid"];?>>Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right " align= "right">
      <li class="active"><a href="PHP/logout.php">Logout</a></li>
      
    </ul>
  </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->

<!--
<div class="main uploadimage">

<h3 ><font color="1ABC9C">Upload your photo</font></h3>
<hr>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="image_preview"><img id="previewing" class="preimg" src="img/014.jpg" /></div>
<hr id="line">
<div id="selectImage">
<form method="POST">
  <input type="text" class="form-control login-field" value="" placeholder="Type something" id="comment" name="comment" />
</form>
<input class="btn btn-primary navbar-btn" type="file" name="file" id="file" required value="12" />
<button class="btn btn-warning navbar-right btn-lg btn-block submit upload-sub" type="submit">Upload</button> 
</div>
</form>
<label class="login-field-icon fui-cross iconsize" for="login-pass"></label>
</div>
-->
<!photo!>
<?
/*


$sqlquery = "select * from `photo` ORDER BY pid DESC";
  $result=mysql_query($sqlquery);
  while($rowresult = mysql_fetch_assoc($result))
  {?>

<div class="Main">
  

  <div class="Photo">
  <img  class="upPhoto" width="250" height="350" src="upload/<?echo $rowresult["Filename"];?>" />
  </div>

  
  <div class = "blockdiv">
  <div class="min like1"><img src = "img/icons-heart.png"  class="imgcenter like"/></div>
  <div class="min com1"><img src = "img/icons-comment.png"  class="imgcenter com"/></div>
  <div class="min big11"><img src = "img/icons-showimg.png"  class=" imgcenter big1"/></div>
  </div>

</div>

  <?}?>
*/

?><!--
<nav class="navbar-static-top ">




<div class="container1 formVar login1 " width="100%" >

    <form id="signup" >

        <div class="header1">
            
            <h3 ><img src = "img/011.png" width ="50" height = "50"/> <font color="1ABC9C"><?echo $_SESSION["userid"];?></font>   </h3>
                      
        </div>  <! lass="header1" !>
        
        <div class="sep"></div>

        <div class="inputs1 login-form" >
         <img class = "fb-pic" src="https://graph.facebook.com/<?= $fid ?>/picture?type=large">
        
        </div>
        <button class="btn btn-warning navbar-right btn-lg btn-block" type="submit">Follow</button> 



      </form>  
</div>

-->

<script>




$(".like1").hover(function(){
$(".like").animate({
    height: "toggle"
  }, 250, function() {
    // Animation complete.
  });
});;

$(".com1").hover(function(){
$(".com").animate({
    height: "toggle"
  }, 250, function() {
    // Animation complete.
  });
});;

$(".big1").hover(function(){
$(".big1").animate({
    height: "toggle"
  }, 250, function() {
    // Animation complete.
  });
});;




</script>
  </body>
</html>
