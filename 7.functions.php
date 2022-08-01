<?php
function wireMsg(){
    echo "This is a function <br>";
}
wireMsg();

//function_arguments
function familyName($fname){
    echo "$fname <br>";
}
familyName("Wilson");
familyName("Juma");
familyName("Mobisa Wil");

function birthYear($name,$year){
    echo "$name born in $year <br>";
}
birthYear("Milton","1994");
birthYear("Dianah","1997");
birthYear("Saraphina","2000");
birthYear("Wilson","2003");
?>
