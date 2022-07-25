<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - loops</title>
</head>

<body>
    <h1>Loops</h1>
    <?php
    //for loops
    echo "<h1>For loop</h>";

    for ($count = 0; $count < 10; $count++)
        echo "<p>Hello world<p>";

    for ($count = 0; $count < 10; $count++)
        echo "<p>The count is : $count</p>";

    //while loops
    echo "<h1>While loop</h>";

    $grade = 0;
    while ($grade < 10) {
        echo "<p>I am less than 10</p>";
        $grade++;
    }

    ?>
    <?php
    //do while loop
    $grade = 0;

    do {
        echo "<p>I am less than 10</p>";
        $grade++;
    } while ($grade < 10);

    ?>
</body>

</html>