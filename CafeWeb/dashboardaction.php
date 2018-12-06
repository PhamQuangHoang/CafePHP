<?php 
include("config.php");
$con = new Connect('cafepage');


if(isset($_POST['newcart'])){

$name = $_POST['prodName'];
$type = $_POST['prodType'];
$price = $_POST['prodPrice'];
$img = $_POST['prodImage'];
	$sql = "INSERT INTO `listproduct` (`productID`, `productType`, `productName`, `productPrice`, `productImage`) VALUES (NULL, '$name', '$type', '$price', '$img')";
	if($con->insert($sql)){
		echo "Thêm thành công";
	}

}


if(isset($_POST['update'])){
$id = $_POST['prID'];
$name = $_POST['prName'];
$type = $_POST['prType'];
$price = $_POST['prPrice'];
$img = $_POST['prImg'];


	$sql = "UPDATE `listproduct` SET `productType`='".$type."',`productName`='".$name."',`productPrice`='".$price."',`productImage`='".$img."' WHERE `productID` LIKE '".$id."'  ";
	if($con->insert($sql)){
		die("update thanh cong");
	}else {
		die("that bai");
	}


}



if(isset($_POST['delete'])){
	$id = $_POST['prID'];
	$sql ="DELETE FROM `listproduct` WHERE `productID`='".$id."' ";
		if($con->insert($sql)){
		die('#tr_id'.$id);
		}else {
		die('false');
		}

}

if(isset($_POST['spam'])){
	$id = $_POST['spam'];
	$sql ="DELETE FROM `transaction` WHERE `transaction`.`transactionID` = $id";
		if($con->insert($sql)){
		die("Đã gỡ bỏ khách hàng spam");
		}else {
		die('false');
		}

}

if(isset($_POST['paysuccess'])){
	$transactionid = $_POST['paysuccess'];

	$sql = "UPDATE `transaction` SET `status` = 'Xác nhận giao dịch' WHERE `transaction`.`transactionID` = '".$transactionid."'  ";
	if($con->insert($sql)){
		die("Giao dich đã được xác nhận !!! ");
	}else {
		die("that bai");
	}

}






 ?>
