<?php 
$x = 10.365;
//the function below will return the data type of the variable
var_dump($x);
echo "<br>";

//objects
//a data type which stores data and information on how to process that data.

class Car{
    function Car(){
        $this->model="BMW";
    }
}
//create an object
$herbie=new Car();

//show object properties
echo $herbie->model;
?> 