<?php
    // $fruit1 = "Apple";
    // $fruit2 = "Banana";
    // $fruit3 = "Grapes";
    // $fruit4 = "Mango";

    $fruits = ["Apple", "Banana", "Grapes", "Mango"];


    //indexed arrays
    //Associative arrays
    //Multidimensional arrays

    //INDEXED arrays (numerical index starting from 0);
    echo $fruits[0]; //Apple
    echo "<br>";
    $fruits[] = "Orange"; //adding new element to the array
    // $fruits = ["Apple", "Banana", "Grapes", "Mango", "Orange"];

    //Associative arrays (key-value pairs)
    $student = [
        "name" => "Rindra",
        "ID" => 1013,
        "Nationlity" => "Malagasy",
        "Department" => "IT",
        "Gender" => "M"
    ];
        
    echo $student["name"];


    //Multidimensional arrays (arrays within arrays)
    $student = [
        ["Alice", 21, "Indonesian"],
        ["Bob", 19, "French"],
        ["Charlie", 23, "Vietnamese"]
    ];

    echo $student[1][2]; //Bob"];

    $student = [
        "Alice" => ["age" => 21, "Nationatliy" => "Indonesian"],
        "Bob" => ["age" => 19, "Nationatliy" => "French"],
        "Charlie" => ["age" => 23, "Nationatliy" => "Vietnamese"]
        ];

    for ($i = 0; $i <= count($students); $i++) {
        echo $students[$i], "<br>";
    }

    //foreach

    foreach ($students as $key => $value) {
        echo "$key : $value <br>";
    }

    /*
        count() - return the number of the elements ()
        array_push() - add element at and end of the array
        array_pop() - remove element at and end of the array
        array_shift() - remove element at and beginning of the array
        array-unshift() - add element at and beginning of the array
        in_array() - check if a value exists in an array
        array_merge() - merge two or more arrays
        array_slice() - extract a portion of an array
        array_keys() - return all the keys of an array
        array_values() - return all the values of an array
        array_filter() - filter elements of an array using a callback function
        array_map() - apply a callback function to the elements of an array
        sort() - sort an array in ascending order
        rsort() - sort an array in descending order
        asort() - sort an associative array in ascending order, according to the values
        ksort() - sort an associative array in ascending order, according to the keys
    */

    function addToNumbers ($a, $b = 6) {
        return $a + $b;
    }

?>