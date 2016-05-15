<?
header("content-type: text/html; charset=utf-8");
$db_link=@mysql_connect("localhost","root","a82475520531");
if(!$db_link)
die ("³sµ²¥¢±Ñ");
$seldb=@mysql_select_db("Wisher");
if(!$seldb)die("¸ê®Æ®w¿ï¾Ü¥¢±Ñ");

?>