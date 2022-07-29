<?php
$t = date("H");
//H reads the hour in 24hr system
if($t<"18"){
    echo("Have a good day");
} elseif($t<"24"){
    echo("Have a good night");
}
?>