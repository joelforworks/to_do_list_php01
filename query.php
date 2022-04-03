<?php

include('connection.php');

if(!$query = mysqli_query($db,"SELECT id,text FROM thing")){
  echo "error";
}












?>
