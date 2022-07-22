<?php
echo strlen("Hello world!"); // outputs 12 //returns length
echo "<br>";

echo str_word_count("Hello world! </br>"); // outputs 2 //returns no.of word 
echo "<br>";

echo strrev("Hello World");
//reverses string
echo "<br>";

echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";//searches for a specific text within a string //returns its position

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?> 