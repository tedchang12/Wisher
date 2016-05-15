<?

include("PHP\sqlconnect.php");
include("PHP\login.php");
include("PHP\Register.php");
include("ajax_php_file.php");
$fid=$_SESSION["fid"];
if(!$_SESSION["userid"])
{
  header("Location:index.php");
}
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
  
<body >
<!--
<div class="kind">
<img src="web/test111.jpg" width="100%" height="100%" class = "kindphoto"/>
<img src="web/123.jpg" width="100%" height="100%" class = "kindphoto"/>
<img src="web/456.jpg" width="100%" height="100%" class = "kindphoto"/>
<img src="web/789.jpg" width="100%" height="100%" class = "kindphoto"/>
-->

</div>
<div class="content1 uploadimage">
  <div class="contentTitle">

  </div>
  <div class="contentbar">

  </div>
  <div class="contentbutton">
    <button class="btn btn-success btn" style="float:right;" type="submit" width="50%">Post</button> 
  </div>


</div>
<div class="divbody">


<div class="leftbody">

<div class = "Main">
  <div class = "mainTitle">
    <img src="web/test111.jpg" width="100%" height="100%" class = "circular"/>
     <font size="5" color="1ABC9C"><a href=<?echo "profile.php?id=".$_SESSION["userid"]."&&srcimg=test111.jpg";?>><?echo $_SESSION["userid"];?></a></font>
     <button class="btn btn-inverse btn-lg" style="float:right;margin-top:2%;" type="submit" width="50%">Follow</button> 
  </div>
  <div class = "Photo" style="background:url('web/test1111.jpg');background-size:100% 100%;" >
  <div class"footcontainer">
      <div class="topfoot"></div>
      <div class="foot" >
        <div style="display:inline-block;">2012-11-02</div>
        <div style="display:inline-block; margin-left:77%;">
          <span class="fui-heart iconani">521</span>
          <span class="fui-chat iconani"></span><soan>28</span>
        </div>
      </div>
  </div>
    
  </div>
  
</div>

<div class = "Main">
  <div class = "mainTitle">
    <img src="web/test111.jpg" width="100%" height="100%" class = "circular"/>
     <font size="5" color="1ABC9C"><a href=<?echo "profile.php?id=".$_SESSION["userid"]."&&srcimg=test111.jpg";?>><?echo $_SESSION["userid"];?></a></font>
     <button class="btn btn-inverse btn-lg" style="float:right;margin-top:2%;" type="submit" width="50%">Follow</button> 
  </div>
  <div class = "Photo" style="background:url('web/test1111.jpg');background-size:100% 100%;" ></div>
 
</div>



<div class = "Main">
  <div class = "mainTitle">
    <img src="web/test111.jpg" width="100%" height="100%" class = "circular"/>
     <font size="5" color="1ABC9C"><a href=<?echo "profile.php?id=".$_SESSION["userid"]."&&srcimg=test111.jpg";?>><?echo $_SESSION["userid"];?></a></font>

  </div>
  <div class = "Photo"><img src="web/test1111.jpg" width="100%" height="100%" /></div>
  <div class="min like1"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
  <div class="min com1"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
  <div class="min big11"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
</div>
</div>

<div class="rightbody">

  <div class="userimg">
    <div><font size="5" color="1ABC9C">Top Wish</font></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
    <div class="userimginbox"><img src="web/test1111.jpg" width="100%" height="100%"/></div>
  </div>
  <div class="userimg" style="margin-top:-6.5%;">
    <div><font size="5" color="1ABC9C">Top Taged</font></div>
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">nature</font></button> 
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">2123</font></button> 
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">1</font></button> 
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">nature</font></button> 
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">nature</font></button> 
    <button class="btn btn-warning btn-lg" style="margin-top:1%;"  type="submit" width="50%"><font color="black">nature</font></button> 
  </div>
</div>




</div>




<nav class="navbar navbar-inverse navbar-fixed-top" id = "navBar" role="navigation">
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


$(".uploadact").click(function(){

$(".content1").fadeIn(800);

});


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
$(".Photo").hover( function(){$(".foot").fadeIn(300);}, function(){$(".foot").fadeOut(300);})



</script>
  </body>
</html>
