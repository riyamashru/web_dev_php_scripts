<?php
$a1=array("a"=>"rose","b"=>"daisy","c"=>"sunflower","d"=>"lily");
$a2=array("a"=>"lotus","b"=>"Jasmine");
array_splice($a1,0,2,$a2);
print_r($a1);


?>