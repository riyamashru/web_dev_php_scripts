<?php

$colors=array("Black","Red","Blue","Green");

$pos=4;
$new=array("Purple");
array_splice($colors,$pos,0,$new);

print_r($colors);


?>