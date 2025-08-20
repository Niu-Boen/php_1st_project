<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $students_marks = function() {
        echo "<h1>Student Marks</h1>";
        echo "<p>Here are the marks for each student:</p>";
    };

    $studenta = function() {
        $studenta_name = "John";
        $studenta_1 = 90;
        $studenta_2 = 85;
        $studenta_3 = 78;
        echo "<br><h1>Those are marks for John</h1>";
        echo "<br>1st project Marks: " . $studenta_1;
        echo "<br>2ed project Marks: " . $studenta_2;
        echo "<br>3rd project Marks: " . $studenta_3;
    };

    $studentb = function(): void {
        $studentb_name = "Doe";
        $studentb_1 = 88;
        $studentb_2 = 92;
        $studentb_3 = 80;
        echo "<br><h1>Those are marks for Doe</h1>";
        echo "<br>1st project Marks: " . $studentb_1;
        echo "<br>2ed project Marks: " . $studentb_2;
        echo "<br>3rd project Marks: " . $studentb_3;
    };

    $studentc = function(): void {
        $studentc_name = "Smith";
        $studentc_1 = 75;
        $studentc_2 = 80;
        $studentc_3 = 90;
        echo "<br><h1>Those are marks for Smith</h1>";
        echo "<br>1st project Marks: " . $studentc_1;
        echo "<br>2ed project Marks: " . $studentc_2;
        echo "<br>3rd project Marks: " . $studentc_3;
    };

    $studentd = function(): void {
        $studentd_name = "Jane";
        $studentd_1 = 95;
        $studentd_2 = 88;
        $studentd_3 = 85;
        echo "<br><h1>Those are marks for Jane</h1>";
        echo "<br>1st project Marks: " . $studentd_1;
        echo "<br>2ed project Marks: " . $studentd_2;
        echo "<br>3rd project Marks: " . $studentd_3;
    };

    $students_marks();
    for ($i = 0; $i < 4; $i++) {
        
        switch ($i) {
            case '0':
                $studenta();
                break;
            case '1':
                $studentb();
                break;
            case '2':
                $studentc();
                break;
            case '3':
                $studentd();
                break;
            default:
                echo "No student found.";
                break;
        }
    }
    ?>
</body>
</html>
