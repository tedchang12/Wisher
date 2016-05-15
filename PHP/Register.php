<?


if(isset($_POST["Reg_mail"])&&$_POST["Regpass"]==$_POST["Reg_pwdchk"]&&$_POST["Reg_mail"]!=""&&$_POST["fname"]!=""&&$_POST["lname"]!=""&&$_POST["Regpass"]!="")
{
	
	$sql_query="insert into `puser`
	(`Fir_name` ,`Las_name` ,`E_mail` ,`Pwd` ,`Reg_date` )
	VALUES (";
	$sql_query .= "'".$_POST["fname"]."',";
	$sql_query .= "'".$_POST["lname"]."',";
	$sql_query .= "'".$_POST["Reg_mail"]."',";
	$sql_query .= "'".$_POST['Regpass']."',";
	$sql_query .= "'".date("Y-m-d")."')";
	mysql_query($sql_query);
	$_SESSION["userid"] = $_POST["fname"].$_POST["lname"];

}

?>