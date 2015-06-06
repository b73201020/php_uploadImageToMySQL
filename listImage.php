<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?
$IP = "localhost";
$user = "webuser";
$password = "resubew7";
$DB = "imageDB";


//連結MySQL Server
$dbnum=mysql_connect($IP,$user,$password);
//選取資料庫
mysql_select_db($DB);

 //組合查詢字串
 $SQLSTR="select filename from imageTB";
 //
 $cur=mysql_query($SQLSTR);
 
//取出資料
while($data=mysql_fetch_array($cur)){

	echo "$data[0]: <img src='showpic.php?filename=$data[0]' />";
	echo "<br>";	
	
}
?>

</body>
</html>