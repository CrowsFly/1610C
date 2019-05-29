<?php
	$arr_A=array(1,3,6,9); $arr_B=array(2,4,5,8,20);
	$arr_c = array_merge($arr_A,$arr_B);
	array_multisort($arr_c);
	var_dump($arr_c);
?>