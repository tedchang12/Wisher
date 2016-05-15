<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:::: PhotoShop Master ::::</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <SCRIPT LANGUAGE="javascript"> //ajax
    function saveUserInfo(){ 
    //获取接受返回信息层 
    var msg = document.getElementById("user_Reg"); 
    var f = document.user_info; 
    var fname = f.fname.value;
    var lname = f.lname.value;
    var usremail = f.usremail.value;
    var p = f.p.value;
    var Rep = f.Rep.value;

    //接收表单的URL地址 
    var url = "Register.php"; 
    //需要POST的值，把每个变量都通过&来联接 
    var postStr = "fname="+ fname&"lname="+ lname&"usremail="+ usremail& "p="+ p&"Rep="+ Rep; 
    //实例化Ajax 
    var ajax = null; 
    if(window.XMLHttpRequest){ 
    ajax = new XMLHttpRequest(); 
    } 
    else if(window.ActiveXObject){ 
    ajax = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    else{ 
    return; 
    } 
    //通过Post方式打开连接 
    ajax.open("POST", url, true); 
    //定义传输的文件HTTP头信息 
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
    //发送POST数据 
    ajax.send(postStr); 
    //返回数据的处理函数 
    ajax.onreadystatechange = function(){ 
      if (ajax.readyState == 4 && ajax.status == 200){ 
      msg.innerHTML = ajax.responseText; 
      } 
    } 
    location.reload() 
    } 
  </SCRIPT> 
  </head>
  <body>
<div id="user_Reg">
        <h1>Register</h1>
        <form method="post" name="user_info">
            <input type="text" name="fname" id="fname" placeholder="First Name" required="required" />
            <input type="text" name="lname" id="lname" placeholder="Last Name" required="required" />
            <input type="email" name="usremail" id="usremail" placeholder="Email" required="required" />
            <input type="password" name="p" id="p" placeholder="Password" required="required" />
            <input type="password" name="Rep" id="Rep" placeholder="Re-enter password" required="required" />
            <button class="ToNew ToNew-primary ToNew-block ToNew-large" onClick="saveUserInfo()">Register</button>  
        </form>
</div>
  </body>
  </html>