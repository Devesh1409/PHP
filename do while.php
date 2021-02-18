<?php

$num =2;

do{
	$num +=2;
	echo $num, "\n";
} 
while ( $num<= 12); 
	

?>
<?php
$num=2;

while ( $num!= 2) {
	echo "In case of while code is skipped";
	echo $num, "\n";
}
do{
	$num++;
	echo "the do...while code is excuted atleast once";
}while ($num==2); 
	
?>