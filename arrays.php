<!-- This is an HTML comment -->
<!--
  Arrays are fundamental in PHP as they allow us
  to store lists of data. Any data type can be
  stored in an array, including mixed data types.
  You do not have to declare it first.
-->
<!-- Step 1: Create a PHP block -->
<?php

  // Step 2a: Creating an array using a function
  $my_arr = array();

  // Step 2b:Creating an array using an array literal
  $my_arr = [];

  // Step 2c: Creating an array using a function with initial values
  $my_arr = array('a', 'b', 'c', 'd');

  // Step 2d: Creating an array using an array literal with inital values
  $my_arr = ['a', 'b', 'c', 'd'];

  // Below is what the array structure will look like when outputted:
  var_dump($my_arr);
  
  // Step 3a: Arrays can have a list of any values of any data types
  $my_arr = [true, "Shaun", 42, 25.63];
  var_dump($my_arr);

  // Step 3b: Adding a value to the end of an array
  array_push($my_arr, "I like cats");
  $my_arr[] = "I also like dogs";
  var_dump($my_arr);

  // Step 3c: Adding a value to the beginning of the array
  array_unshift($my_arr, "Boorakacha");
  var_dump($my_arr);

  // Step 4a: Accessing "Shaun" from the $my_arr array
  echo $my_arr[2];

  // Step 4b: Outputting an entire array cannot be done with the "echo" function
  

  // Step 4c: Outputting an array's contents is made easy with var_dump
  

  // Step 5a: Nested array example
  $my_nested_arr = [
    42,
    "Shaun",
    [
      "Diablo",
      "Lasering",
      "Nerd things"
    ]
  ];
  var_dump($my_nested_arr);

  // Step 5b: Accessing "3D Printing" from the nested array
  echo $my_nested_arr[2][1];

  // Step 5c: Dump the nested array structure
  

  // Step 5d: Updating a value in an array
  $my_nested_arr[1] = "Bobby B Baby";
  $my_nested_arr[2][2] = "Super nerdy things";
  var_dump($my_nested_arr);

  // Step 6a: Removing an item from the beginning of an array
  array_shift($my_nested_arr);
  
  // Step 6b: Removing an item from the end of the array
  array_pop($my_nested_arr);
  $my_nested_arr[] = ['a', 'b', 'c'];
  $my_nested_arr[] = [1, 3, 4];
  var_dump($my_nested_arr);
  
  // Step 6c: Removing a specific item from an array
  array_splice($my_nested_arr, 1, 1);
  var_dump($my_nested_arr);

  // Step 6d: Add new item after index 3
  array_splice($my_nested_arr, 1, 0, "<h1>42</h1>");
  echo $my_nested_arr[1];

?>