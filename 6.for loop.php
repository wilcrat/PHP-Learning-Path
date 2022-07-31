<?php
for($i=1;$i<=10;$i++){
    echo "The num is: $i <br>";
}

//forearch works only on arrays
$names = array("Wilson","Json","Goodstein","Hart");
foreach ($names as $value){
    echo "$value <br> ";
    echo $names[0];
}
?>