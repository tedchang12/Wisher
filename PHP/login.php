<?

if(isset($_POST['login-name']))
{
	
	$Getmail=$_POST['login-name'];
	$sqlquery = "select * from `Puser` where E_mail = '$Getmail' ";
	$result=mysql_query($sqlquery);
	while($rowresult = mysql_fetch_assoc($result))
	{

		$passStr = $rowresult['Pwd'];
		$input = $_POST['login-pass'];
		
		if($input == $passStr)
		{
			$_SESSION['userid'] = $rowresult['Fir_name'].$rowresult['Las_name'];
			$_SESSION["fid"] = $rowresult["Uid"];
		}
		
	}
}







?>
