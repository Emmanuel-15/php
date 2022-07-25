<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - If Statements</title>
</head>

<body>
    <h1>String manipulation</h1>
    <?php
    //string manipulation
    $phrase1  = "student who came late";
    $phrase2 = "In class, stand wtih rock";
    $name = "sarvesh padwalkar";

    echo $phrase1 . " " . $phrase2;

    //string transformation
    echo "<br>Uppercase first letter: " . ucwords($name) . "<br>";
    echo "<br>Upper case: " . strtoupper($name) . "<br>";
    echo "<br>Lower case: " . strtolower($name) . "<br>";
    ?>
</body>

</html>