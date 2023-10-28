<?php
$fruits=array("Apple","Pineapple","Mango","Grapes");
rsort($fruits);

foreach($fruits as $fruit)
{
    print_r($fruit);
    echo "<br>";
}
?>