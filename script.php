<?php
header('Location: index.php');
include('connection.php');
if(isset($_POST['text'])){
	$text = $_POST['text'];
	// INSERT THING
	$sql="INSERT INTO thing (text) VALUES('$text')";
	if(!$db->query($sql)){
		echo 'error3';
	}
}
if(isset($_POST['id_task'])){
	$id=$_POST['id_task'];
	echo $id;
	$drop_task = "DELETE FROM thing WHERE id=".$id;
	if(!$db->query($drop_task)){
		echo 'error1';
	}	
}	
?>
