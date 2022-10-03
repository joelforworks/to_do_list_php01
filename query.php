<?php

// file contain the database connection 
include('connection.php');

// query get all task from database

if(!$query = mysqli_query($db,"SELECT id,text FROM thing")){
  echo "error";
}


?>
