<?php

$course = array("c++"=>"1000","java"=>"1200","Php"=>"12000");

// echo $course["java"];
// echo "<pre>";
// print_r($course);
foreach ($course as $key => $value) 
{
	echo " course  ". $key ." fee is ". $value ."<br>";
}


?>