<?
session_start();
include("PHP\sqlconnect.php");
include("PHP\login.php");

include("PHP\Register.php");
$app_id = '731869990200133';
$app_secret = 'b400d9268574928937c2f792fb91787c';
$redirect_uri = "http://localhost/Wisher/";

// Requested permissions for the app - optional
$permissions = array(
  'email',
  'user_location',
  'user_birthday'
);


// Define the root directoy
define( 'ROOT', dirname( __FILE__ ) . '/' );

// Autoload the required files
require_once( ROOT . 'facebook-php-sdk-v4-4.0-dev/autoload.php' );

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

// Initialize the SDK
FacebookSession::setDefaultApplication( $app_id, $app_secret );

// Create the login helper and replace REDIRECT_URI with your URL
// Use the same domain you set for the apps 'App Domains'
// e.g. $helper = new FacebookRedirectLoginHelper( 'http://mydomain.com/redirect' );
$helper = new FacebookRedirectLoginHelper( $redirect_uri );

// Check if existing session exists
if ( isset( $_SESSION ) && isset( $_SESSION['fb_token'] ) ) {
  // Create new session from saved access_token
  $session = new FacebookSession( $_SESSION['fb_token'] );

    // Validate the access_token to make sure it's still valid
    try {
      if ( ! $session->validate() ) {
        $session = null;
      }
    } catch ( Exception $e ) {
      // Catch any exceptions
      $session = null;
    }
} else {
  // No session exists
  try {
    $session = $helper->getSessionFromRedirect();
  } catch( FacebookRequestException $ex ) {

    // When Facebook returns an error
  } catch( Exception $ex ) {

    // When validation fails or other local issues
    
  }
}

// Check if a session exists
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

if($session) {

  try {

    $user_profile = (new FacebookRequest(
      $session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());
    $_SESSION["userid"] = $user_profile->getName();
    $_SESSION["fid"] = $user_profile->getid();
    $_SESSION["facebookLog"]=1;


  } catch(FacebookRequestException $e) {

    echo "Exception occured, code: " . $e->getCode();
    echo " with message: " . $e->getMessage();

  }   

}
if(isset($_SESSION["userid"]))
{
  header("Location:successLogin.php");
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

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style1.css" />

    <script src="js/script.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui-pro.min.js"></script>
    <style>
    
#signup {
    padding: 0px 25px 25px;
    background: #fff;
    box-shadow: 
        0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
        0px 4px 20px rgba( 0,0,0,0.33 );
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header1 {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .header p {
    color: #8f8f8f;
    font-size: 14px;
    font-weight: 300;
}

#signup .sep {
    height: 1px;
    background: #e8e8e8;
    width: 350px;
    margin: 0px -25px;
}

#signup .inputs1 {
    margin-top: 25px;
}

#signup .inputs label {
    color: #8f8f8f;
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 1px;
    margin-bottom: 7px;
    display: block;
}

input::-webkit-input-placeholder {
    color:    #b5b5b5;
}

input:-moz-placeholder {
    color:    #b5b5b5;
}

#signup .inputs input[type=email], input[type=password] {
    background: #f5f5f5;
    font-size: 0.8rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    padding: 13px 10px;
    width: 330px;
    margin-bottom: 20px;
    box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
    clear: both;
}

#signup .inputs input[type=email]:focus, input[type=password]:focus {
    background: #fff;
    box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    outline: none;   
}

#signup .inputs .checkboxy {
    display: block;
    position: static;
    height: 25px;
    margin-top: 10px;
    clear: both;
}

#signup .inputs input[type=checkbox] {
    float: left;
    margin-right: 10px;
    margin-top: 3px;
}

#signup .inputs label.terms {
    float: left;
    font-size: 14px;
    font-style: italic;
}

#signup .inputs #submit1 {
    width: 100%;
    margin-top: 20px;
    padding: 15px 0;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;
        background: -moz-linear-gradient(
        top,
        #b9c5dd 0%,
        #a4b0cb);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#b9c5dd),
        to(#a4b0cb));
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #737b8d;
    -moz-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    text-shadow:
        0px 1px 3px rgba(000,000,000,0.3),
        0px 0px 0px rgba(255,255,255,0);
    display: table;
    position: static;
    clear: both;
}

#signup .inputs #submit1:hover {
    background: -moz-linear-gradient(
        top,
        #a4b0cb 0%,
        #b9c5dd);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#a4b0cb),
        to(#b9c5dd));
}
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

<img src="web/test1111.jpg" width="100%" height = "100%" />

<!註冊!>
<div class="container1 formVar SignUp1" width="100%">

    <form id="signup" method= "post">

        <div class="header1">
        
            <h3><font color="1ABC9C">Register</font></h3>
                       
        </div>
        
        <div class="sep"></div>

        <div class="inputs1 login-form"  method= "post">

          <div class="form-group "id="fname" name="fname">
          <input type="text" class="form-control login-field" value="" placeholder="Enter your first name" id="fname" name="fname" />
          <label class="login-field-icon fui-user" for="login-name"></label>

          </div>


          <div class="form-group "id="lname" name="lname" >
          <input type="text" class="form-control login-field" value="" placeholder="Enter your last name" id="lname" name="lname" />
          <label class="login-field-icon fui-user" for="login-name"></label>
          </div>


          <div class="form-group "id="Reg_mail" name="Reg_mail">
          <input type="text" class="form-control login-field" value="" placeholder="Enter your mail" id="Reg_mail" name="Reg_mail" />
          <label class="login-field-icon fui-user" for="login-name"></label>
          </div>
          
          <div class="form-group"id="Regpass" name="Regpass">
          <input type="password" class="form-control login-field" value="" placeholder="Password" id="Regpass" name="Regpass" />
          <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
        
          <div class="form-group"id="Reg_pwdchk" name="Reg_pwdchk">
          <input type="password" class="form-control login-field" value="" placeholder="Check your password" id="Reg_pwdchk" name="Reg_pwdchk" />
          <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
        </div>
        <button class="btn btn-primary navbar-right btn-lg btn-block" type="submit">Register</button> 
        <button class="btn btn-inverse navbar-right btn-lg btn-block" type="reset">Reset</button>
      </form>  
        
</div>
<!登入!>
<div class="container1 formVar login1" width="100%" >

    <form id="signup" method= "POST">

        <div class="header1">
        
            <h3><font color="1ABC9C">Login</font></h3>
                       
        </div>
        
        <div class="sep"></div>

        <div class="inputs1 login-form" method= "POST">

          <div class="form-group " id="login-name" name = "login-name">
          <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name = "login-name"/>
          <label class="login-field-icon fui-user" for="login-name"></label>

          </div>
          </br>
          <div class="form-group" id="login-pass" name="login-pass">
          <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="login-pass" />
          <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
          </br>
        
        </div>
        <button class="btn btn-primary navbar-right btn-lg btn-block" type="submit">Login</button> 
        <?
          if(!isset($session)){
          $loginUrl = $helper->getLoginUrl( $permissions );
          ?>
<button class="btn btn-inverse navbar-right btn-lg btn-block" ><span class="fui-facebook"></span><a href=<?echo $loginUrl;?>>Login with Facebook</a></button>

          <?}



        ?> 


      </form>  


        
</div>
</br>
</br>
</br>




​



<script>

$(".formVar").hide();
x = $("nav").position();
$(".ssign").click(function(){
  x=$(document).scrollTop()
 $(".SignUp1").css({top: x+200, left: "40%", position:'absolute'});
 $(".SignUp1").fadeIn(800);
 $("img").click(function(){

 $(".SignUp1").fadeOut(800);
});
});
$(".logg").click(function(){
  x=$(document).scrollTop()
 $(".login1").css({top: x+200, left: "40%", position:'absolute'});
 $(".login1").fadeIn(800);
 $("img").click(function(){

 $(".login1").fadeOut(800);
});
});




</script>
  </body>
</html>
