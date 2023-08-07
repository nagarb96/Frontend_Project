<?php require_once("config.php");

if(isset($_POST['submit']))
{
	$studentName=trim($_POST['studentName']);
	$dateOfBirth=trim($_POST['dateOfBirth']);
	$motherName=trim($_POST['motherName']);
	$fatherName=trim($_POST['fatherName']);
	$homeAddress=trim($_POST['homeAddress']);
	$homePhone=trim($_POST['homePhone']);
	$motherCellPhone=trim($_POST['motherCellPhone']);
	$motherEmail=trim($_POST['motherEmail']);
	$fatherCellPhone=trim($_POST['fatherCellPhone']);
	$fatherEmail=trim($_POST['fatherEmail']);
	$proposedStartDate=trim($_POST['proposedStartDate']);
	$id_number='TS'.rand(99,10).time();
// 	$folder = "uploads/";
// 	//Photo 
// $image_file=$_FILES['image']['name'];
//  $file = $_FILES['image']['tmp_name'];
//  $path = $folder . $image_file; 
//  $target_file=$folder.basename($image_file);
//   $file_name_array = explode(".", $image_file);
//  $extension = end($file_name_array);
//  $new_image_name = 'photo_'.rand() . '.' . $extension;

//  //Sign 
// $simage_file=$_FILES['simage']['name'];
//  $sfile = $_FILES['simage']['tmp_name'];
//  $spath = $folder . $simage_file; 
//  $starget_file=$folder.basename($simage_file);
//  $file_name_array = explode(".", $simage_file);
//  $extension = end($file_name_array);
//  $snew_image_name = 'sign_'.rand() . '.' . $extension;
// if($file!='')
// {
// move_uploaded_file($file,  $folder . $new_image_name); 
// }
// if($sfile!='')
// {
// move_uploaded_file($sfile, $folder . $snew_image_name); 
// }

	$sql="INSERT INTO registration(studentName,dateOfBirth,motherName,fatherName,homeAddress,homePhone,motherCellPhone,motherEmail,fatherCellPhone,fatherEmail,proposedStartDate,id_number) VALUES(:studentName,:dateOfBirth,:motherName,:fatherName,:homeAddress,:homePhone,:motherCellPhone,:motherEmail,:fatherCellPhone,:fatherEmail,:proposedStartDate,:id_number)";
	  $stmt = $db->prepare($sql);
    $stmt->bindParam(':studentName', $studentName, PDO::PARAM_STR);
    $stmt->bindParam(':dateOfBirth', $dateOfBirth, PDO::PARAM_STR);
    $stmt->bindParam(':motherName', $motherName, PDO::PARAM_STR);
    $stmt->bindParam(':fatherName', $fatherName, PDO::PARAM_STR);
    $stmt->bindParam(':homeAddress', $homeAddress, PDO::PARAM_STR);
    $stmt->bindParam(':homePhone', $homePhone, PDO::PARAM_INT);
    $stmt->bindParam(':motherCellPhone', $motherCellPhone, PDO::PARAM_INT);
    $stmt->bindParam(':motherEmail', $motherEmail, PDO::PARAM_STR);
    $stmt->bindParam(':fatherCellPhone', $fatherCellPhone, PDO::PARAM_INT);
    $stmt->bindParam(':fatherEmail', $fatherEmail, PDO::PARAM_STR);
    $stmt->bindParam(':proposedStartDate', $proposedStartDate, PDO::PARAM_STR);
    $stmt->bindParam(':id_number', $id_number, PDO::PARAM_STR);
    $stmt->execute();
    $last_id = $db->lastInsertId();
      if($last_id!='')
      {
    header("location:preview.php?id=".$id_number);
      }
      else 
      {
      	echo 'Something went wrong';
      }
}
?> 