<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
    echo "<h1>Welcome To My Webpage</h1>";
    
    $a = 10;
    $b = 20;
    if($a < $b) {
        echo "<h1>Welcome To My Webpage</h1>";
    } else {
        echo "<h1>Goodbye!</h1>";
    }
    ?>
</body>
</html>

<?php

    $i = 1;
    do{
        //instruction
        echo $i;
        $i++;
    }
    while($i > 5);
?>

<?php
    
    //for loop
    for ($i = 0; $i <= 10; $i += 1) {
        // instruction
        echo $i;
    }
?>

<?php
    //while loop
    $i = 1;
    while ($i <= 10) {
        // instruction
        echo $i;
        $i++;
    }
?>

<?php

    //break statement
    for ($i = 0; $i <= 10; $i++) {
        echo $i;

        if ($i == 5) {
            break; // exit the loop when i is 5
            // continue; // skip the rest of the loop iteration when i is 5
        }
        echo $i;
    }
?>

<?php

    // the switch statement:

    $skills = '';
    $lifespan = 30;
    switch ($skills) {
        case 'kick':
            $lifespan -= 2;
            break;
        case 'punch':
            $lifespan -= 1;
            break;
        case 'back-kick':
            $lifespan -= 5;
            break;
        case 'miss':
            $lifespan -= 0;
            break;
        default:
            echo "Hello!";
    }
?>