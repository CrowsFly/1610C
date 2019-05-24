<?php
header('content-type:text/html;charset=utf8');
$num = array(1,2);
$num1 = $num[0];
$num2 = $num[1];
echo '加:';
echo array_sum($num);
echo '<br>';
echo '乘:';
echo array_product($num);
