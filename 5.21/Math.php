<?php

	$array = array(2,4,3,6,3,2,5,5);
	echo $array[1],'<br>',$array[3];

$array = array(
 'fruit1' => 'apple',
 'fruit2' => 'orange',
 'fruit3' => 'grape',
 'fruit4' => 'apple',
 'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}

?>