<?php
$t = date("H");
//H reads the hour in 24hr system
if($t<"10"){
    echo("Have a good morning");
} elseif($t<"18")   {
    echo("Have a good day");
} else{
    echo("Have a good night");
}
?>