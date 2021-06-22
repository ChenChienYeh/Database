<?php
//連接資料庫
include("connection.php"); 

$fid=$_GET["fid"];



$select_db=@mysql_select_db("3c");//選擇資料庫

$sql_query = "select * from includeall where id='".$fid."' ";
$result=mysql_query($sql_query);

echo'<table border=1 width=100%>';
echo'<tr>';
$cnt=0;

while ($row = mysql_fetch_array($result))
{
	$cnt++;
	if($cnt==6)
		echo'<tr>';
	echo '<td width=20%><center><img src=../operation/pic/'.$row[0].'.jpg width=100 hight=100><br>';
	echo '<a href=40.php?Numbering='.$row[0].'&Numbering='.$bid.'>'.$row[1].'<br>','</a>';
	echo '<form method="post"><p>Quantity<input type=text name=cart size=5><br></p>';
	echo '<p><input type="submit" value="join shoppingcart"></p></form>';
}



?>





