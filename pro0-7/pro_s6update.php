<?php include("test_header.php"); ?>
<br><br><br><br><br>
<table align="center">
	<tr align="center">
		<td>
			<form action="pro_s6update.php">
				รหัสสินค้า : <input name=id_productid value=>
				ชื่อสินค้า : <input name=productname value=>
				รหัสผู้จำหน่าย : <input name=supplierid value=>
				รหัสกลุ่มสินค้า : <input name=categoryid value=>
				ปรมาณต่อหน่วย : <input name=quantityperunit value=>
				<input type="submit" value="update">
</form>
		</td>
	</tr>
</table>

<?php
if (!isset($_GET['id'])) { exit; }
require("pro_s1connect.php");
$sql.="update productsTest set ";
$sql.="id_productid ='". $_GET['id_productid'] ."', ";
$sql.="productname ='". $_GET['productname'] ."', ";
$sql.="supplierid ='". $_GET['supplierid'] ."', ";
$sql.="categoryid ='". $_GET['categoryid'] ."', ";
$sql.="quantityperunit ='". $_GET['quantityperunit'] ."' ";
$sql.="where id_productid ='". $_GET['id_productid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>