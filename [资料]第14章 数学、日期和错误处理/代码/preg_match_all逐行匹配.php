<?php 

$str="linux and php and linux and java and html5";

$ptn='/linux/';
preg_match_all($ptn,$str,$arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
 ?>
