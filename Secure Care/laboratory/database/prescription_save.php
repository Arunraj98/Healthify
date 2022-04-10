<?php
include('../../db_connect/db.php');

	$mdcpatid=$_POST["mdcpatid"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$dob=$_POST["dob"];
	$age=$_POST["age"];
	$cont1=$_POST["cont1"];
	$blgrp=$_POST["blgrp"];
	$hdname=$_POST["hdname"];
	$docname=$_POST["docname"];
	$diseas=$_POST["diseas"];
	$cdate=$_POST["cdate"];
	$diseasdesc=$_POST["diseasdesc"];
	$prescriptn=$_POST["prescriptn"];
	$amount=$_POST["amount"];
	$date=$_POST["date"];
	$lab=$_POST["lab"];
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../admin/result_photo/" . $_FILES["photo1"]["name"]);
	$photo1 = $_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../../admin/result_photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	
$sql = "insert into laboratoryamount(mdcpatid,name,sex,dob,age,cont1,blgrp,hdname,docname,diseas,cdate,diseasdesc,prescriptn,photo1,photo2,amount,date,lab) VALUES ('$mdcpatid','$name','$sex','$dob','$age','$cont1','$blgrp','$hdname','$docname','$diseas','$cdate','$diseasdesc','$prescriptn','$photo1','$photo2','$amount','$date','$lab')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../prescription_search.php");

?>			
		
        
