<?php
	
	for($n=1;$n<=100;$n++){
		if($n == 100){
			for($a=1;$a<=100;$a++){
				if($num = $n/$a){
					echo $num;exit;
				}
			}
		}
	}

?>