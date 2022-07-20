<?php
/*NOTE: variable names are case sensitive*/
$txt = "W3Schools.com";
echo "I love $txt!";

//global variables
$a=5;
function myTest(){
    // using var a inside this function will generate an error
    echo"<p>Variable a inside function is: $a</p>";
}
myTest();
//but when accessed outside the function it works
echo"<p>Variable a inside function is: $a</p>";


//local variables
function myWest(){
    $b=10;
    echo"<p>Variable b is: $b</p>";
}
myWest();
//but accessing b outside the function will generate an error
echo $b;

/****GLOBAL KEYWORD******/
//used to access a global variable from within a function
$x = 5;
$y = 10;

function myZest(){
    global $x,$y;
    $y=$x+$y;
    echo"<p>Variable z is: $y</p>";
}
myZest();

echo "$y <br>";//outputs 15

/*****STATIC KEYWORD*****/
//when a function is executed, all its variables are deleted
//static keeps a local variable active even after the function has been executed, to use later

function myLest(){
    static $c=0;
    echo $c;
    $c++;
}
myLest();
myLest();
myLest();

?> 

