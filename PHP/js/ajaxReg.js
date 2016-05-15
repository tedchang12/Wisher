<SCRIPT LANGUAGE="javascript"> //ajax
function saveUserInfo(){ 
//获取接受返回信息层 
var msg = document.getElementById("msg"); 
var f = document.user_info; 
var conten = f.conten.value; 

//接收表单的URL地址 
var url = "PHP/ajaxReg.php"; 
//需要POST的值，把每个变量都通过&来联接 
var postStr = "conten="+ conten; 
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