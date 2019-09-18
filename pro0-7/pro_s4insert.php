<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br><br><br>

<table align="center">
		<tr>
			<td>
<form action=pro_s4insert.php>
				รหัสสินค้า : <input name=id_productid value=>
				ชื่อสินค้า : <input name=productname value=>
				รหัสผู้จำหน่าย : <input name=supplierid value=>
				รหัสกลุ่มสินค้า : <input name=categoryid value=>
				ปรมาณต่อหน่วย : <input name=quantityperunit value=>
				<input type=submit value=Save>
</form>
			</td>
		</tr>
	</table><br><br><br><br><br><br><br>
	<?php include("footer.php"); ?>
<?php
if (!isset($_GET['id_productid']) || !isset($_GET['productname'])) exit;
require("pro_s1connect.php");
$sql="insert into $tb values('".$_GET['id_productid']."','".$_GET['productname']."','".$_GET['supplierid']."','".$_GET['categoryid']."','".$_GET['quantityperunit']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
