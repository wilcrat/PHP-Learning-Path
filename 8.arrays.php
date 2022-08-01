<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . " and ". $cars[1]. " , I dislike " . $cars[2].  "<br>";

//Get The Length of an Array 
echo count($cars);
echo "<br>";

//loop through and print all the values
$arrlength = count($cars);
for($x=0;$x<$arrlength;$x++){
    echo "$cars[$x] <br>";
}

//Associative Arrays
//they use named keys that you assign to them.


?>