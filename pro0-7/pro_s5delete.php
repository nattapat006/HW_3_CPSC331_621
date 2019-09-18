<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table align="center" width="100%">
	<tr align="center">
		<td>
			<?php
$myForm = '<body>
<form action="pro_s5delete.php">
ต้องการลบ id ที่ : <input name="delid" value="">
<input type="submit" value="delete">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("pro_s1connect.php");
$sql="delete from $tb ";
$sql.="where id_productid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");
	mysql_close($connect);
}
?>
		</td>
	</tr>
</table>

<?php include("footer.php"); ?>