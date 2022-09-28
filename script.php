<?php
header('Location: index.php');
include('connection.php');
// When submit text form insert task to database
if(isset($_POST['text'])){
	$text = $_POST['text'];
	// INSERT task
	$sql="INSERT INTO thing (text) VALUES('$text')";
	if(!$db->query($sql)){
		echo 'error3';
	}
}
// When submit id_task form delete task from database 
if(isset($_POST['id_task'])){
	$id=$_POST['id_task'];
	echo $id;
	$drop_task = "DELETE FROM thing WHERE id=".$id;
	if(!$db->query($drop_task)){
		echo 'error1';
	}	
}	
?>
