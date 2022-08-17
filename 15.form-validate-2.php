<?php
php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = test_input($POST['name']);
    $name = test_input($POST['email']);
    $name = test_input($POST['gender']);
    $name = test_input($POST['comment']);
    $name = test_input($POST['website']);
}

function test_input($data){
    $data = trim($data); //Strip unnecessary characters (extra space, tab, newline) from the user input data
    $data = stripslashes($data); //Remove backslashes (\) from the user input data
    $data = htmlspecialchars($data);
    return $data;
}
//this file


>