<?php
$person=array("name"=>"Dhara","age"=>20,"email"=>"dharavariya12@gmail.com");

$remove=array_pop($person);

echo "Removed Arry is :";
print_r($remove);

echo "<br>";
print_r($person);
?>