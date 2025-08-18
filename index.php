<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

    echo "Hello, World!";
    echo "<br>";
    echo "How are you?";
    echo "<br>";
    echo "I'm fine";
    echo "<br>";
    echo 'i\'m fine';
?>
<?php

    $x = 5;
    $_isAdmin = true;
    $y = 2.45;
    $name - "Niu Boen";
    $array = [4, 5, 0, 9];
    
    $GLOBALS;
    $_SESSION;
    $_GET;
    $_REQUEST;

    echo $x;
    echo "<br>";
    echo "$x anything $y";

    define("PI", 3.14);
    echo "<br>";
    echo PI;
    echo "<br>";
?>

<?php
    //control structures
    // if, else, elseif

    $a = 1;
    $b = 2;
    if($a > $b) {
        // instruction
        echo "a is greater than b";
    } elseif($a < $b) {
        // instruction
        echo "a is less than b";
    } else {
        // instruction
        echo "a is equal to b";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 2;

    ?>
    <p>I'm going to comppare <?php echo $a; ?> and <?php echo $b; ?></p>
    <br>
    <!-- <?php if ($a > $b)?>
    <p><?php echo $a; ?> is greater than <?php echo $b; ?></p> -->
    <?php if ($a < $b){?>
        <ul>
            <li>
                list 1
            </li>
            <li>
                list 2
            </li>
            <li>
                list 3
            </li>
        </ul>
        <?php }else{ ?>
            <ul>
                <li>
                    list 4
                </li>
                <li>
                    list 5
                </li>
            </ul>
            <?php }?>

            <?php if ($a > $b): ?>
        <ul>
            <li>
                list 1
            </li>
            <li>
                list 2
            </li>
            <li>
                list 3
            </li>
        </ul>
        <?php else: ?>
            <ul>
                <li>
                    list 4
                </li>
                <li>
                    list 5
                </li>
            </ul>
            <?php endif;?>
</body>
</html>