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
 $SQLSTR="select filepic,filetype from imageTB where filename='"
         . $_REQUEST["filename"] . "'";
 //
 $cur=mysql_query($SQLSTR);
 //取出資料
 $data=mysql_fetch_array( $cur );
 
//設定網頁資料格式
header("Content-Type: $data[1]");
// 輸出圖片資料
echo base64_decode($data[0]);
?>